<?php

namespace App\Http\Controllers;

use App\Models\Notiff;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
class NotiffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.notif.index',[
        'notiff'=>Notiff::all()
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.notif.create',
        );
    
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
            'subject' =>'required',
           
         
        ]);

      


        Notiff::create($validatedData);

        return redirect('/dashboard/notif')->with('success','Pengumuman Anda Berhasil Ditambahkan!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notif  $notif
     * @return \Illuminate\Http\Response
     */
    public function show(Notif $notif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notif  $notif
     * @return \Illuminate\Http\Response
     */
    public function edit(Notif $notif)
    {
        return view('dashboard.notif.edit',[
            'notiff' => $notif,
            'notiff' => Notiff::all(),
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notif  $notif
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notif  $notif
     * @return \Illuminate\Http\Response
     */
    public function delete4($id)
    {
        $data = Notiff::find($id);
        $data->delete();
        return redirect('dashboard/notif')->with('success','Pengumuman Berhasil DiHapus!');
    }

   
}
