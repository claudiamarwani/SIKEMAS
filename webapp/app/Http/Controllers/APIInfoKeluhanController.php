<?php

namespace App\Http\Controllers;

use App\Models\Infokeluhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Transformers\InfoKeluahanTransformer;
use Illuminate\Support\Facades\DB;

class APIInfoKeluhanController extends Controller
{
    
    public function add2(Request $request){
        $request->validate([
            'user_id'       => 'required',
            'opd_id'        => 'required',
            'category_id'   => 'required',
            'subject'       => 'required',
            'slug'          => 'required',
            'body'          => 'required',
         ]);

        $infokeluhan = new Infokeluhan([
            'user_id' =>$request->user_id,
            'opd_id' => $request->opd_id,
            'category_id' => $request->category_id,
            'subject' => $request->subject,
            'slug' => $request->slug,
            'body' => $request->body,
        ]);

        $infokeluhan->save([
            'user_id'   => Auth::user()->id,
        ]);

        return response()->json([
            'message' => 'Successfully created keluhan!'
        ], 201);
    }

    public function infokeluhan(Request $request){
        return response()->json($request->infokeluhan());
    }



    public function readinfokeluhan($id) 
    {
        $infokeluhan = DB::table('infokeluhans')->where('user_id', $id)->get();
        return response()->json($infokeluhan);
    }


    
    public function updateinfokeluhan(Request $request,Infokeluhan $infokeluhan, $id) 
    {
        $infokeluhan= Infokeluhan::find($id);
        $infokeluhan->update([
            'user_id' =>$request->user_id,
            'opd_id' => $request->opd_id,
            'category_id' => $request->category_id,
            'subject' => $request->subject,
            'slug' => $request->slug,
            'body' => $request->body,
        ]);


        $infokeluhan->save();
        $data = $infokeluhan;

        return response()->json([
            'message' => 'Successfully update keluhan!'
        ], 201);
    }


    public function destroy($id)
    {
        $infokeluhan = Infokeluhan::find($id);
        $infokeluhan->delete();
        return response()->json('Keluhan deleted successfully');
    }
    

}
