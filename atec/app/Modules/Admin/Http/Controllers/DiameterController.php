<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Admin\Http\Requests\DiameterRequest;
use App\Models\Diameter;

class DiameterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diameters = Diameter::all();
        return view('admin::pages.diameters.index', compact('diameters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin::pages.diameters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiameterRequest $request)
    {
        $diameter= Diameter::create($request->validated());

        return redirect()->route('admin.diameters.index')->with('sucess','diameter updated');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diameter = Diameter::find($id);

        return view('admin::pages.diameters.edit', compact('diameter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DiameterRequest $request,$id)
    {
        $diameter = Diameter::find($id);
        $diameter->update($request->all());
        return redirect(route('admin.diameters.index'))->with('msg', 'Diameter Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diameter = Diameter::findOrFail($id);
        $diameter->delete($id);
        return redirect(route('admin.diameters.index'));
    }
}