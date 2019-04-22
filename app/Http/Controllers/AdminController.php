<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function profile()
    {
        return view('admin.profile', ['user'=>auth()->user()]);
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name'  =>  'required',
            'email' =>  'required',
            'photo' =>  'image|max:1024'
        ]);

        if($request->hasFile('photo')){
            $data['photo'] = $request->file('photo')->store('/');
        }
        $user = auth()->user();
        $user->update($data);
        return back()->with('success-message', 'Profle Updated Successfully!');
    }
}
