<?php

namespace App\Modules\Customer\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Customer\Http\Requests\HistoryOrderRequest;

use Illuminate\Support\Facades\Redirect;
use App\Models\Lens;
use App\Models\Product;
use App\Models\Employee;

use App\Models\OrderHistory;
use App\Models\OrderHistorySpecifications;
use App\Models\OrderHistoryPrism;

use App\Models\FilterLenses;
use App\Models\Filter;
use App\Models\Consignee;

class OrderController extends Controller
{

    public function standard()
    {
        $consignees = Consignee::get();
        $employees= Employee::where('user_id', auth()->id())->get();
        $lenses = Lens::active()->get();
        $filters = Filter::active()
        ->parent()
        ->with('children')
        ->get();

        return view('customer::pages.standardOrders', compact('filters','consignees','employees','lenses'));
    }

    public function store(HistoryOrderRequest $request)
    {
        $data = $request->validated();
        
        $data['user_id'] = auth()->id();


        $order = OrderHistory::create($data);

        $specifications = [];

        if(request()->filled('left')){

            $lens = request('left'); 
            $lens['type'] = 'left';

            $specifications[0] = $lens;
        }

        if(request()->filled('right')){
            $lens = request('right'); 
            $lens['type'] = 'right';

            $specifications[1] = $lens;
        }

        foreach($specifications as $specification){
            $specification['order_id'] = $order->id;

            OrderHistorySpecifications::create($specification);
        }
        return redirect(route('customer.order.review'))->with('sucess','Order success');
    }

    public function review()
    {
        $orders = OrderHistory::where('user_id', auth()->id())->with('specifications')->get();
        return view('customer::pages.review', compact('orders'));
    }


    public function history()
    {
        $orders = OrderHistory::where('user_id', auth()->id())->with('specifications')->get();
        return view('customer::pages.history', compact('orders'));
    }

    public function edit($id)
    {
        return $id;
    }


    public function update(Request $request, $id)
    {
        return $request;
    }

    public function destroy($id)
    {
        return $id;
        
        return redirect(route('admin.companies.index'));
    }

    
    public function getProduct(Request $request){
        return  [
                    'products'  => $this->getProducts(),
                    'options'   => $this->getOptions()
                ];
    }

    public function getProducts(){

        $allProduct = Product::where('lens_id', request('id'))->available()->get();

        $products = [];

        if($allProduct->count()>0){

            foreach($allProduct as $product){
                $products[] = '<option value="' . $product->id . '">' . $product->name . '</option>';
            }

            return $products;
        }

        return '<option value=""> Not Found Any Product </option>';
    }

    public function getOptions(){

        $lens = Lens::find( request('id') );

        if($lens->count()>0){

            $filters = Filter::whereIn('id', $lens->options->pluck('parent_id')->toArray())
            ->active()
            ->parent()
            ->with('children')
            ->orderBy('id', 'Asc')
            ->get();

            if($filters->count()>0){
                $options = [];
                foreach ($filters as $filter)
                {
                   $middel = '';
                        foreach ($filter->children as $child)
                        {
                            if( !in_array($child->id, $lens->options->pluck('id')->toArray()) )
                            {

                               $middel= "<div>
                                            <input class='inp-cbx' id=' $child->text ' type='checkbox' style='display: none;'/>
                                            <label class='cbx' for=' $child->text '><span>
                                            <svg width='12px' height='10px' viewbox='0 0 12 10'>
                                            <polyline points='1.5 6 4.5 9 10.5 1'></polyline>
                                            </svg></span><span> $child->text </span></label>
                                        </div>";
                            }
                        }

                    $middel != '' ? $options[] = "<div class='col-6'><h3> $filter->text </h3>" . $middel . "</div>" : '';
                }
                return $options;
            }

            return '<h3 value=""> Not found any options </h3>';
            
        }

        return '<h3 value=""> Not found any product in this lens </h3>';
    }
}
