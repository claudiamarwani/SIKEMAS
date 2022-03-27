<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Kuesioner;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Opd;

class APIKuesionerAdminController extends Controller
{
    public function kuesioners(Kuesioner $kuesioner) 
    {
        $kuesioners= $kuesioner->all();
        return response()->json($kuesioners);
    }

    public function categories(Category $category) 
    {
        $categories= $category->all();
        return response()->json($categories);
    }

    public function addcategory(Request $request){
        $request->validate([
            'opd_id' =>'required',
            'name'       => 'required',
            'slug'        => 'required',
            
         ]);

        $category = new Category([
            'opd_id' =>$request->opd_id,
            'name' =>$request->name,
            'slug' => $request->slug,
            
        ]);

        $category->save();

        return response()->json([
            'message' => 'Successfully created Category!'
        ], 201);
    }
    public function addopd(Request $request){
        $request->validate([
            'opd_id' =>'required',
            'name'       => 'required',
            'slug'        => 'required',
            
         ]);

        $opd = new Opd([
            'opd_id' =>$request->opd_id,
            'name' =>$request->name,
            'slug' => $request->slug,
            
        ]);

        $opd->save();

        return response()->json([
            'message' => 'Successfully created OPD!'
        ], 201);
    }

    public function destroy($id)
    {
        $opd = Opd::find($id);
        $opd->delete();
        return response()->json('OPD deleted successfully');
    }

    public function destroy2($id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return response()->json('Category deleted successfully');
    }


}
