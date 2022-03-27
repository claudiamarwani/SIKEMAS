<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('dashboard.accound.index',[
            'user' => User::all(),
          
        ]);
    
    }
    public function edit_profile(){
        $user=auth()->user();
        $data['user']=$user;
        return view('dashboard.accound.edit_profile',$data);
    }
    public function update_profile(Request $request){
        $request->validate([
            'name'=>'required|min:2|max:100',
            'email'=>'required|min:2|max:100',
            'address'=>'required|min:2|max:100',
            'phonenumber'=>'required|min:2|max:100',
        ],[
            'name.required'=>'Name is required',
            'email.required'=>'email is required',
            'address'=>'required|min:2|max:100',      
            'phonenumber'=>'required|min:2|max:100',
        ]);

        $user=auth()->user();

        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'phonenumber'=>$request->phonenumber,
        ]);

        return redirect()->route('dashboard.accound.index')->with('success','Data diri berhasil di update');

    }
}
