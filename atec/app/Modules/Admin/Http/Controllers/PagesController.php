<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Paragraph;
use App\Models\PageImage;
use App\Models\Language;
use App\Modules\Admin\Http\Requests\PageRequest;

class PagesController extends Controller
{

    public function index()
    {
      $pages = Page::withCount('paragraphs','images')->get();
      return view('admin::pages.pagesStatic.pages.index',compact('pages'));
    }


    public function create()
    {
      $lang = Language::get();
      return view('admin::pages.pagesStatic.pages.create',compact('lang'));
    }


    public function store(PageRequest $request)
    {
        $data=$request->validated();
        Page::create($data);
        return redirect()->route('admin.pages.index');
    }

  
    public function show(Page $pages)
    {
      return view('admin::pages.pagesStatic.pages.show',compact('pages'));
    }

    public function edit($id)
    {
      $page=Page::find($id);
      $lang = Language::get();
      return view('admin::pages.pagesStatic.pages.edit',compact('page','lang'));
    }


    public function update(PageRequest $request, Page $page)
    {
        $data=$request->validated();
        $page->update($data);
        return redirect()->route('admin.pages.index')->with('msg', 'Pages Updated');
    }

    public function destroy($id)
    {
        //
    }
}
