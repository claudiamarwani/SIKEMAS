<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Models\User;
class AuthController extends Controller
{
    public function signup(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|confirmed',
            'address' =>'required',
            'nik' => 'required',
            'phonenumber' => 'required',
            'role' => 'required',
            'gender' =>'required',
         ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'address' => $request->address,
            'nik' => $request->nik,
            'phonenumber' => $request->phonenumber,
            'role' => $request->role,
            'gender' => $request->gender,
        ]);

        $user->save();

        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }

    public function login(Request $request){

        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);
        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Your email or password is wrong! Please try again!'
            ], 401);
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        return response()->json([
            'message' => 'Successfully login',
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }

    public function logout(Request $request){
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    public function user(Request $request){
        return response()->json($request->user());
    }

    public function updateuser(Request $request,User $user, $id) 
    {
        $user= User::find($id);
        $user->update([
            'name' =>$request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phonenumber' => $request->phonenumber,
            
        ]);


        $user->save();
        $data = $user;

        return response()->json([
            'message' => 'Successfully update profile!'
        ], 201);
    }

    public function updateprofile(Request $request,User $user, $id) 
    {
        $user= User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'nik' => $request->nik,
            'phonenumber' => $request->phonenumber,
        ]);


        $user->save();
        $data = $user;

        return response()->json([
            'message' => 'Successfully update Profile!'
        ], 201);
    }

    
}