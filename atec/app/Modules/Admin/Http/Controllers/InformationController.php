<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\Admin\Http\Requests\InformationRequest;
use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\Language;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        
         $languages=Language::all();
         $infos = Information::with('translations')->get();
         return view('admin::pages.informations.index',compact('infos', 'languages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           $languages = Language::get();
           return view('admin::pages.informations.create',compact('languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InformationRequest $request)
    {
       $info= Information::create($request->validated());

        return redirect()->route('admin.informations.index')->with('sucess','page updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return view('admin::pages.information.show', compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = Information::find($id);
        $languages = Language::get();
        return view('admin::pages.informations.edit', compact('info','languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InformationRequest $request, $id)
    {
        $info = Information::find($id);
        $info->update($request->all());
        return redirect(route('admin.informations.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info =Information::findOrFail($id);
        $info->delete($id);
        return redirect(route('admin.informmations.index'));
    }
}
