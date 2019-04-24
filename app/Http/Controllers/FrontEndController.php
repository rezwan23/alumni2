<?php

namespace App\Http\Controllers;

use App\Event;
use App\News;
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
        ]);
    }
    public function singleEvent(Event $event)
    {
        return view('user.single.event', ['event'=>$event]);
    }

    public function singleNews(News $news)
    {
        return view('user.single.news', ['news'=>$news]);
    }
}
