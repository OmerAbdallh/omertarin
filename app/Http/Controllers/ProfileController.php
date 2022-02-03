<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
    //Index
    public function index()
    {
        $user=Auth::user();
        $id=Auth::id();
        return view ('user.index')->with('user', $user);
    }


    //Edit
    public function edit()
    {
        $user=Auth::user();
        $id=Auth::id();
        return view ('user.profile')->with('user', $user);
    }

    //Update
    public function update(Request $request, Profile $profile)
    {
        $this->validate($request,[
            'name' =>'required',
            'cantery' =>'required',
            'gender' =>'required',
            'jop' =>'required',
            
        ]);
            $user=Auth::user();
            $user->name                  =$request->name;
            $user->profile->cantery      =$request->cantery;
            $user->profile->gender       =$request->gender;
            $user->profile->jop          =$request->jop;
            $user->profile->facbook      =$request->facbook;
            $user->save();
            $user->profile->save();
            return redirect()->route('profile');

    }

    
}
