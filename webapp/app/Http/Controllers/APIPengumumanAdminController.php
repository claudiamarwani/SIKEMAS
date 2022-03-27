<?php

namespace App\Http\Controllers;

use App\Models\Notiff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Transformers\InfoKeluahanTransformer;
use Illuminate\Support\Facades\DB;

class APIPengumumanAdminController extends Controller
{
    

    public function add3(Request $request){
        $request->validate([
            
            'subject'       => 'required',
           
         ]);

        $notiff = new Notiff([
           
            'subject' => $request->subject,
           
        ]);

        $notiff->save();

        return response()->json([
            'message' => 'Successfully created keluhan!'
        ], 201);
    }

    



    public function readpengumuman(Notiff $notiff) 
    {
        $notiff= $notiff->all();
        return response()->json($notiff);
    }


    public function destroy($id)
    {
        $notiff = Notiff::find($id);
        $notiff->delete();
        return response()->json('Pengumuman deleted successfully');
    }
    

}
