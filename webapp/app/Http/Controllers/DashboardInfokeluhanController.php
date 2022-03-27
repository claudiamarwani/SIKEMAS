<?php

namespace App\Http\Controllers;

use App\Models\Infokeluhan;

use App\Models\Category;
use App\Models\Opd;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardInfokeluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('dashboard.infokeluhan.index',[
            'infokeluhans' =>Infokeluhan  ::where('user_id', auth()->user()->id)->get()

        ]);
        
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.infokeluhan.create',[
            'categories' => Category::all(),
            'opdes' => Opd::all()
        ]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'subject' =>'required|max:50',
            'slug' => 'required|unique:infokeluhans',
            'category_id'=>'required',
            'opd_id'=>'required',
            'body'=>'required'
        ]);

        $validatedData['user_id']= auth()->user()->id;
        $validatedData['excerpt']= Str::limit(strip_tags($request->body),10);

        Infokeluhan::create($validatedData);

        return redirect('/dashboard/infokeluhan')->with('success','Keluhan Anda Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Infokeluhan  $infokeluhan
     * @return \Illuminate\Http\Response
     */
    public function show(Infokeluhan $infokeluhan)
    {
        return view('dashboard.infokeluhan.show',[
            'infokeluhan' =>$infokeluhan,
       
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Infokeluhan  $infokeluhan
     * @return \Illuminate\Http\Response
     */
    public function edit(Infokeluhan $infokeluhan)
    {
        return view('dashboard.infokeluhan.edit',[
            'infokeluhan' => $infokeluhan,
            'categories' => Category::all(),
            'opdes' => Opd::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Infokeluhan  $infokeluhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Infokeluhan $infokeluhan)
    {
        $rules = [
            'subject' =>'required|max:50',
            'category_id'=>'required',
            'opd_id'=>'required',
            'body'=>'required'
        ];

        if($request->slug != $infokeluhan->slug){
            $rules['slug']= 'required|unique:infokeluhans';
        }
        $validatedData = $request->validate($rules);
        $validatedData['user_id']= auth()->user()->id;
 

        Infokeluhan::where('id',$infokeluhan->id)
                    ->update($validatedData);

        return redirect('/dashboard/infokeluhan')->with('success','Keluhan Anda Berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Infokeluhan  $infokeluhan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infokeluhan $infokeluhan)
    {
        Infokeluhan::destroy($infokeluhan->id);

        return redirect('/dashboard/infokeluhan')->with('success','Keluhan Anda Berhasil Dihapus!');
    }
}
