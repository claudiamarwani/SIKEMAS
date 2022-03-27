<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Models\User;
use Validator;
class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    
    public function store(Request $request)
    {
      
       
      User::create([
       
            'email' => $request->email,
            'role'=>$request->role,
           'password' => bcrypt($request->password),
           'name' => $request->name,
           'address' => $request->address,
           'nik' => $request->nik,
           'phonenumber' => $request->phonenumber,
           'gender' => $request->gender,
           'image'=> $request->image
       ]);

       if($request->file('image')){
            $validatedData['image']= $request->file('image')->store('register-images');
            
        }
  
      

        return redirect('/register')->with('success','Account Anda Berhasil Diregistrasi! Silahkan Login');
    }
}