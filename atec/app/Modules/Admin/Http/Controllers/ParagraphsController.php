<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Paragraph;
use App\Models\Language;
use App\Modules\Admin\Http\Requests\ParagraphRequest;

class ParagraphsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Page $page)
    {
        $paragraphs = Paragraph::where('page_id', $page->id)->get();

        // $paragraphs = Paragraph::where('page_id', $page->id)->withCount('images')->get();
        
        return view('admin::pages.pagesStatic.paragraphs.index', compact('page','paragraphs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Page $page)
    {
        $lang = Language::get();
        return view('admin::pages.pagesStatic.paragraphs.create',compact('page','lang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParagraphRequest $request,Page $page)
    {
        $data=$request->validated();
        Paragraph::create($data);
        return redirect()->route('admin.pages.paragraphs.index',$page->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        $paragraph = $page->paragraph;
        return view('admin::pages.pagesStatic.paragraphs.show',compact('page','paragraph'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page, Paragraph $paragraph)
    {
      $lang = Language::get();
      return view('admin::pages.pagesStatic.paragraphs.edit',compact('page','paragraph','lang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ParagraphRequest $request,Page $page, Paragraph $paragraph)
    {
        $data= $request->all();
        $paragraph->update($data);
        return redirect()->route('admin.pages.paragraphs.index',$page->id)->with('msg', 'Paragraph Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
