<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index', ['news'=>News::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'title' =>  'required',
            'image' =>  'required',
            'content'   =>  'required',
        ]);
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $name = 'sliders/'.time().'.'.$ext;
            $destinationFolder = public_path('uploads/');
            Image::make($image)->resize(870, 413)->save($destinationFolder.'/'.$name);
            $data['image'] = $name;
        }
        News::create($data);
        return redirect()->route('news.index')->with('success-message', 'News created successfuly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', ['news'=>$news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $data = $this->validate($request, [
            'title'  => 'required',
            'content'   =>  'required',
        ]);
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $name = 'sliders/'.time().'.'.$ext;
            $destinationFolder = public_path('uploads/');
            Image::make($image)->resize(870, 413)->save($destinationFolder.'/'.$name);
            $data['image'] = $name;
        }
        $news->update($data);
        return back()->with('success-message', 'Event Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        return back()->with('success-message', 'Event Deleted Successfully!');
    }
}
