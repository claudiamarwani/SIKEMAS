<?php

namespace App\Http\Controllers;


use App\Models\Kuesioner;
use Illuminate\Http\Request;

class APICreateKuesionerController extends Controller
{
   
    public function createkuesioner(Request $request){
        $request->validate([
            'name'          => 'required',
            'opd_id'        => 'required',
            'category_id'   => 'required',
            'A1'            => 'required',
            'A2'            => 'required',
            'A3'            => 'required',
            'A4'            => 'required',
            'A5'            => 'required',
         ]);

        $kuesioner = new Kuesioner([
            'name' =>$request->name,
            'opd_id' => $request->opd_id,
            'category_id' => $request->category_id,
            'A1' => $request->A1,
            'A2' => $request->A2,
            'A3' => $request->A3,
            'A4' => $request->A4,
            'A5' => $request->A5,
         
        ]);

        $kuesioner->save();

        return response()->json([
            'message' => 'Successfully created kuesioner!'
        ], 201);
    }
}
