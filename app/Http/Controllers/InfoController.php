<?php

namespace App\Http\Controllers;

use App\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function info()
    {
        $info = Info::first();
        return view('admin.info', ['info'=>$info]);
    }

    public function store(Request $request){
        $data = $this->validate($request, [
            'title' =>  'required',
            'moto'  =>  '',
            'fb'    =>  '',
            'gp'    =>  '',
            'yt'    =>  '',
            'ln'    =>  '',
            'phone' =>  '',
            'email' =>  '',
            'logo'  =>  'image|max:1024',
            'address'    =>  '',
            'map'=>''
        ]);

        if($request->hasFile('logo')){
            $data['logo'] = $request->file('logo')->store('/');
        }
        $info = Info::first();
        if($info){
            $info->update($data);
        }else{
            Info::create($data);
        }
        return back()->with('success-message', 'Info Updated Successfully');

    }
}
