<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Image;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.partner.index', ['partners'=>Partner::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $name = 'sliders/'.time().'.'.$ext;
            $destinationFolder = public_path('uploads/');
            Image::make($image)->resize(270, 130)->save($destinationFolder.'/'.$name);
            $image = $name;
        }
        Partner::create([
            'name'  =>  $request->name,
            'image' =>$image,
        ]);
        return back()->with('success-message', 'Partner added successfully!');
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
    public function edit(Request $request, Partner $partner)
    {
        return view('admin.partner.edit', ['partner'=>$partner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $name = 'sliders/'.time().'.'.$ext;
            $destinationFolder = public_path('uploads/');
            Image::make($image)->resize(270, 130)->save($destinationFolder.'/'.$name);
            $image = $name;
        }
        $partner->update(['name'=>$request->name, 'image'=>$image]);
        return back()->with('success-message', 'Partner Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return back()->with('success-message', 'Partner Deleted Successfully!');
    }
}
