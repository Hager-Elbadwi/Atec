<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Filter;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filters = Filter::active()
        ->parent()
        ->with('children')
        ->get();

        return view('admin::pages.filter.index', compact('filters'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filters = Filter::where('deleted_at', null)
        ->parent()
        ->get();

        return view('admin::pages.filter.create', compact('filters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // if(request()->filled('parent_id') && request('parent_id') == 0  )$data['parent_id'] = null;
        Filter::create($data);

        return redirect()->route('admin.filter.index')->with('msg', 'Filter Created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Filter $filter)
    {
       
        $filters = Filter::where('deleted_at',null)
        ->parent()
        ->paginate(10);

        return view('admin::pages.filter.edit', compact('filter', 'filters'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filter $filter)
    {
        $data = $request->validated();
        // $data = $request->all();
        if(request()->filled('parent_id') && request('parent_id') == 0  )$data['parent_id'] = null;
        $filter->update($data);

        return redirect()->route('admin.filter.index')->with('msg', 'filter Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filter $filter)
    {
        if($filter->deleted_at == null){

            $filter->delete();
            return back()->with('msg', 'filter Deleted');
        }
        
        $filter->update(['deleted_at' => null]);
        return back()->with('msg', 'filter Recover');
    }

    public function trash()
    {
        $filters = Filter::active()
        ->parent()
        ->with('children')
        ->get();

        return view('admin::pages.filter.trash', compact('filters'));
    }
}
