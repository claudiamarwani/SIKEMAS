<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kuesioner;
use App\Models\NilaiKuesioner;
use App\Models\Opd;
use App\Models\Category;

class KuesionerController extends Controller
{
    public function createStep1(Request $request)
    {
        
        
        
        $value = new NilaiKuesioner();
       $data['keterangan'] = $value->keterangan;
        $data['kuesioner'] = $request->session()->get('kuesioner');
        return view('kuesioner.create-step1',$data,[
         
           'categories' => Category::all(),
           'opdes' => Opd::all()
       ]);
      
    }

    public function store(Request $request)
    {   
        $request->validate([
          
           'category_id'=>'required',
            'opd_id'=>'required',
            'name'=>'required'
           
         
          
            
            
            
        ]);
   
        if(empty($request->session()->get('kuesioner')))
        {
            $kuesioner = new Kuesioner();
            $kuesioner->fill($request->all());
            $request->session()->put('kuesioner',$kuesioner);
        }
        else{
            $kuesioner = $request->session()->get('kuesioner');
            $kuesioner->fill($request->all());
            $request->session()->put('kuesioner',$kuesioner);
        }
        
       
  
        return redirect('/kuesioner/create-step2');



    }
    public function createStep2(Request $request)
    {
        
        $value = new NilaiKuesioner();
        $data['keterangan'] = $value->keterangan;
        $data['kuesioner'] = $request->session()->get('kuesioner');
        return view('kuesioner.create-step2', $data,[
           
        ]);
      
    }

    public function store2(Request $request)
    {
        $request->validate([
            'A1'=>'required',
            'A2'=>'required',
            'A3'=>'required',
            'A4'=>'required',
            'A5'=>'required',
            
     
         
            
            
            
        ]);
        
    
        $kuesioner =$request->session()->get('kuesioner');
        $kuesioner->fill($request->all());
  
        $save = $kuesioner->save();
        if($save)
        {
            $request->session()->put('kuesioner');
            return redirect('kuesioner/create-step1')->with('success','Kuesioner telah dikirim , Terima kasih!');
        }


    }
}
