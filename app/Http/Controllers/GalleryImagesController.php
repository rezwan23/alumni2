<?php

namespace App\Http\Controllers;

use App\Models\PhotoGallery;
use App\Models\PhotoGalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class GalleryImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.images.index', ['images' =>PhotoGalleryImage::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'image',
        ]);
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $name = 'galleries/'.time().'.'.$ext;
            $destinationFolder = public_path('uploads/');
            Image::make($image)->resize(800, 725)->save($destinationFolder.'/'.$name);
            PhotoGalleryImage::create(['image'=>$name]);
        }
        return redirect()->route('image.index')->with('success-message', 'Photo Added Successfully!');

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
    public function edit(PhotoGalleryImage $image)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhotoGalleryImage $image)
    {
        Storage::delete($image->image);
        $image->delete();
        return back()->with('success-message', 'Image Deleted Successfully!');
    }

    public function addToGallery(PhotoGalleryImage $image)
    {
        return view('admin.images.setgallery', ['image'=>$image, 'galleries'=>PhotoGallery::all()]);
    }

    public function setGallery(PhotoGalleryImage $image, Request $request){
        $image->galleries()->sync($request->gallery_id);
        return back()->with('success-message', 'Added To Galleries');
    }
}
