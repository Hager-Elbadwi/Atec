<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\Admin\Http\Requests\BlogRequest;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Language;



class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages=Language::all();
        $blogs = Blog::with('translations')->get();
        return view('admin::pages.blogs.index', compact('blogs','languages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $languages = Language::get();
       return view('admin::pages.blogs.create',compact('languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $blog= Blog::create($request->validated());

        return redirect()->route('admin.blogs.index')->with('sucess','page updated');;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        $languages = Language::get();
        return view('admin::pages.blogs.edit', compact('blog','languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request,$id)
    {
        $blog = Blog::find($id);
        $blog->update($request->all());
        return redirect(route('admin.blogs.index'))->with('msg', 'Blog Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete($id);
        return redirect(route('admin.blogs.index'));
    }
}
