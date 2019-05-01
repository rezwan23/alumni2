<?php

namespace App\Http\Controllers;

use App\Event;
use App\Models\Member;
use App\Models\Partner;
use App\Models\PhotoGallery;
use App\Models\PhotoGalleryImage;
use App\News;
use App\Page;
use App\Slider;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('user.index',[
            'sliders'=>Slider::all(),
            'events'    =>  Event::all(),
            'news'  =>  News::all(),
            'partners'  =>  Partner::all(),
            'members'   =>  Member::where('status', 1)->get(),
            'pages' =>  Page::all(),
        ]);
    }
    public function singleEvent(Event $event)
    {
        return view('user.single.event', ['event'=>$event,'pages' =>  Page::all(),]);
    }

    public function singleNews(News $news)
    {
        return view('user.single.news', ['news'=>$news,'pages' =>  Page::all(),]);
    }

    public function photoGallery()
    {
        return view('user.gallery', ['pages' =>  Page::all(),'galleries'=>PhotoGallery::all(), 'images'=>PhotoGalleryImage::all()]);
    }

    public function singlePage(Page $page)
    {
        return view('user.single.page', ['pages' =>  Page::all(),'page'=>$page]);
    }
}
