<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Slider;

class SliderController extends Controller
{
    public function __construct()
    {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderby('position', 'asc')->get();
        return view('admin.slider.index', ['sliders'=>$sliders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sliderTotalNum = count(Slider::all());
        $validatedData = $this->validate($request, [
            'title' => '',
            'link'  => '',
            'image'  => 'required|image|mimes:jpg,jpeg,JPG,JPEG,png|max:2048',
            'content'  =>  '',
            'position'  =>  '',
        ]);

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $name = 'sliders/'.time().'.'.$ext;
            $destinationFolder = public_path('uploads/');
            Image::make($image)->resize(1343, 546)->save($destinationFolder.'/'.$name);
            $validatedData['image'] = $name;
        }
        $sliderTotalNum++;
        if(!$validatedData['title'])
        {
            $validatedData['title'] = 'Slider image '.$sliderTotalNum;
        }
        if(!$validatedData['link'])
        {
            $validatedData['link'] = '#';
        }
        if(!$validatedData['position'])
        {
            $validatedData['position'] = $sliderTotalNum;
        }
        Slider::create($validatedData);
        return redirect()->back()->with('success-message', 'Slider item inserted successfully!');
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
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', ['slider'=>$slider]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $sliderTotalNum = count(Slider::all());
        $validatedData = $this->validate($request, [
            'title' => '',
            'link'  => '',
            'image'  => 'image|mimes:jpg,jpeg,JPG,JPEG,png|max:2048',
            'position'  =>  '',
            'content'   =>  '',
        ]);

        if($request->hasFile('image'))
        {
            $image_path = public_path('uploads/'.$slider->image);
            unlink($image_path);
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $name = 'sliders/'.time().'.'.$ext;
            $destinationFolder = public_path('uploads');
            Image::make($image)->resize(1350, 472)->save($destinationFolder.'/'.$name);
            $validatedData['image'] = $name;
        }
        $slider->update($validatedData);
        return redirect()->back()->with('success-message', 'Slider item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $image = public_path('uploads/'.$slider->image);
        unlink($image);
        $slider->delete();
        return redirect()->back()->with('success-message', 'Slider deleted successfully!');
    }
}
