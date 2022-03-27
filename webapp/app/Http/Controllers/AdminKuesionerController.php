<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Infokeluhan;
use App\Models\Kuesioner;
use App\Models\Opd;

use Illuminate\Http\Request;


class AdminKuesionerController extends Controller
{
    public function index()
    {   
       
        return view('dashboard.kuesioners.index',[
            'kuesioners'=>Kuesioner::all(),
            'opdes' => Opd::all(),
            'categories' => Category::all(),
        ]);
    }
    public function create()
    {
        return view('dashboard.kuesioners.create');
    
    }

    public function createStep2()
    {
        return view('dashboard.kuesioners.createStep2',[
         
            'categories' => Category::all(),
            'opdes' => Opd::all()
        ]);
       
    
    
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' =>'required',
            'slug'=>'required'
            
        ]);

      //  $validatedData['user_id']= auth()->user()->id;
      //  $validatedData['excerpt']= Str::limit(strip_tags($request->body),10);

        Opd::create($validatedData);

        return redirect('/dashboard/kuesioners')->with('success','OPD Anda Berhasil Ditambahkan!');
    }

    public function store2(Request $request)
    {
        $validatedData = $request->validate([
            'name' =>'required',
            'slug'=>'required',
            'opd_id'=>'required',
            
        ]);

      //  $validatedData['user_id']= auth()->user()->id;
      //  $validatedData['excerpt']= Str::limit(strip_tags($request->body),10);

        Category::create($validatedData);

        return redirect('/dashboard/kuesioners')->with('success2','Category Anda Berhasil Ditambahkan!');
    }
    public function show(Kuesioner $kuesioner)
    {
        return view('dashboard.kuesioners.show',[
            'kuesioner' =>$kuesioner

        ]);
    }
    public function delete($id)
    {
        $data = Opd::find($id);
        $data->delete();
        return redirect('/dashboard/kuesioners')->with('success','OPD Anda Berhasil DiHapus!');
    }

    public function delete2(Infokeluhan $infokeluhan, $id)
    {
        $data = Category::find($id);
        $data->delete();
        return redirect('/dashboard/kuesioners')->with('success','OPD Anda Berhasil DiHapus!');
    }
}
