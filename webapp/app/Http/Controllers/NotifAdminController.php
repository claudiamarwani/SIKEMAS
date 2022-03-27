<?php

namespace App\Http\Controllers;

use App\Models\Notiff;
use Illuminate\Http\Request;

class NotifAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.notif.index');
    
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
            'subject' =>'required|max:50',
            'slug' => 'required|unique:notif',
            'body'=>'required'
        ]);

        $validatedData['user_id']= auth()->user()->id;


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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notif  $notif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notif $notif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notif  $notif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notif $notif)
    {
        //
    }
}
