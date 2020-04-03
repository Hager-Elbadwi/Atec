<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Lens;
use App\Models\Filter;
use App\Models\Product;
use App\Models\FilterLenses;

class ProductsController extends Controller
{
    
    public function index(Request $request)
    {
        $query = Product::available();
        if(request()->filled('name')){
            $query->where('name', 'LIKE',"%{$request->name}%");
        }
        $products = $query->paginate(20);
        

        return view('admin::pages.products.index', compact('products'));
    }

    public function create()
    {
        $lenses = Lens::active()->available()->get();

        return view( 'admin::pages.products.create', compact('lenses'));
    }

    public function store(Request $request)
    {
        $lens = Lens::find( request('lens_id') );

        $products = explode("\r\n", request('name') );

        $count=0;

        foreach($products as $product){

            Product::updateOrCreate(['lens_id' => $lens->id, 'name' => $product]);

            foreach ( explode(' ', $product ) as $option ){

                $filter = Filter::where('text', $option)->first();
                
                if($filter){ FilterLenses::updateOrCreate(['lens_id' => $lens->id, 'filter_id' => $filter->id]); }
            set_time_limit(600);
            }

            ++$count;
            set_time_limit(600);
        }

        return redirect()
        ->route('admin.products.index')
        ->with('msg', "<b>$count</b> products created in the lens <b>$lens->name</b>");
    }

    public function edit(Product $product)
    {
        $lenses = Lens::active()->available()->get();

        return view('admin::pages.products.edit', compact('lenses', 'product'));
    }

    
    public function update(Request $request, Product $product)
    {
        $old = $product->name;

        if($old != request('name')){
            $product->update($request->all());
            return redirect()
            ->route('admin.products.index')
            ->with('msg', "<b>It has been modified</b> <br><b>from</b> :  $old <br><b>to</b> : $product->name");
        }

        return redirect()
        ->route('admin.products.index')
        ->with('msg', 'There is nothing different');
        

    }

    public function destroy(Product $product)
    {
        if($product->deleted_at == null){

            $product->update(['deleted_at' => now()]);
            return back()->with('msg', 'product Deleted');
            
        }

        $product->update(['deleted_at' => null]);
        return back()->with('msg', 'product Recover');
    }

    public function trash()
    {
        $products = Product::trash()->paginate(20);
        return view('admin::pages.products.trash', compact('products'));
    }
}
