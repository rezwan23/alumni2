<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Image;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.event.index', ['events'=>Event::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
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
            'date'  =>  'required',
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
        Event::create($data);
        return redirect()->route('event.index')->with('success-message', 'Event created successfuly!');
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
    public function edit(Event $event)
    {
        return view('admin.event.edit', ['event'=>$event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $data = $this->validate($request, [
            'title'  => 'required',
            'date'  =>  'required',
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
        $event->update($data);
        return back()->with('success-message', 'Event Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return back()->with('success-message', 'Event Deleted Successfully!');
    }
}
