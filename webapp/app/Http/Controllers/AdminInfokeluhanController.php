<?php

namespace App\Http\Controllers;

use App\Models\Infokeluhan;
use Illuminate\Http\Request;

class AdminInfokeluhanController extends Controller
{
    public function index()
    {
        return view('dashboard.infokeluhanadmin.index',[
            'infokeluhans'=>Infokeluhan::all(),

            
        ]);
    }
    public function delete3($id)
    {
        $data = Infokeluhan::find($id);
        $data->delete();
        return redirect('dashboard/infokeluhanadmin')->with('success','Keluhan Berhasil DiHapus!');
    }

    public function show(Infokeluhan $infokeluhan)
    {
        return view('dashboard.infokeluhanadmin.show',[
            'infokeluhan' =>$infokeluhan,
       
        ]);
    }
}
