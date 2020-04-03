<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Paragraph;
use App\Models\PageImage;


class HomeController extends Controller
{
    public function home()
    {
        $page = Page::where('id',1)->with('translations')->first();
        $paragraphs = Paragraph::where('page_id',$page->id)->with('translations')->get();
        $images = PageImage::where('page_id',$page->id)->get();
        
        return view('pages.index',compact('page','paragraphs','images'));
    }

    public function about()
    {
        $page = Page::where('id',2)->with('translations')->first();
        $paragraphs = Paragraph::where('page_id',$page->id)->with('translations')->get();
        $images = PageImage::where('page_id',$page->id)->get();
        
        return view('pages.about',compact('page','paragraphs','images'));
    }

    public function contact()
    {
        $page = Page::where('id',3)->with('translations')->first();
        $paragraphs = Paragraph::where('page_id',$page->id)->with('translations')->get();
        $images = PageImage::where('page_id',$page->id)->get();
        
        return view('pages.contact',compact('page','paragraphs','images'));
    }

    public function courses()
    {
        $page = Page::where('id',4)->with('translations')->first();
        $paragraphs = Paragraph::where('page_id',$page->id)->with('translations')->get();
        $images = PageImage::where('page_id',$page->id)->get();
        
        return view('pages.courses',compact('page','paragraphs','images'));
    }

    public function blogs()
    {
        $page = Page::where('id',5)->with('translations')->first();
        $paragraphs = Paragraph::where('page_id',$page->id)->with('translations')->get();
        $images = PageImage::where('page_id',$page->id)->get();
        
        return view('pages.blogs',compact('page','paragraphs','images'));
    }

    public function PrivcyPolicy()
    {
        $page = Page::where('id',6)->with('translations')->first();
        $paragraphs = Paragraph::where('page_id',$page->id)->with('translations')->get();
        $images = PageImage::where('page_id',$page->id)->get();
        
        return view('pages.policy',compact('page','paragraphs','images'));
    }
    
}
