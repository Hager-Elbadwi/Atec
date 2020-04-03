<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Admin\Http\Requests\ConsigneesRequest;
use App\Models\Consignee;

class ConsigneesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consignees = Consignee::all();
        return view('admin::pages.consignees.index', compact('consignees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin::pages.consignees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConsigneesRequest $request)
    {
        $consignee= Consignee::create($request->validated());

        return redirect()->route('admin.consignees.index')->with('sucess','page updated');;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consignee = Consignee::find($id);

        return view('admin::pages.consignees.edit', compact('consignee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ConsigneesRequest $request,$id)
    {
        $consignee = Consignee::find($id);
        $consignee->update($request->all());
        return redirect(route('admin.consignees.index'))->with('msg', 'Consignee Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consignee = Consignee::findOrFail($id);
        $consignee->delete($id);
        return redirect(route('admin.consignees.index'));
    }
}
