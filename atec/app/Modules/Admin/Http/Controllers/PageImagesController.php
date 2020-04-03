<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Modules\Admin\Http\Requests\PageImagesRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\PageImage;
// use App\Models\Language;
use App\Models\HelperTrait;


class PageImagesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Page $page)
    {
      $images = PageImage::where('page_id',$page->id)->get();
      
      return view('admin::pages.pagesStatic.images.index', compact('page','images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Page $page)
    {
      return view('admin::pages.pagesStatic.images.create',compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageImagesRequest $request, Page $page)
    {
        
      PageImage::create($request->validated());
       
      return redirect()->route('admin.pages.images.index',$page->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page, PageImage $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page , PageImage $image)
    {
        return view('admin::pages.pagesStatic.images.edit',compact('page','image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageImagesRequest $request, Page $page, PageImage $image)
    {
    //  dd('aaa');
      $image->update($request->validated());
     
      return redirect()->route('admin.pages.images.index',$page->id)->with('msg', 'Image Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page, PageImage $image)
    {
        //
    }
}
