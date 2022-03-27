@extends('dashboard.layouts.main')
<link rel="stylesheet" type="text/css" href="../../css/01homeawal.css">
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
align-items-center pt-3 pb-2 mb-3 border-bottom">



<div class="card text-white bg-info mb-3" style="max-width: 40rem;">
    <div class="card-header">Welcome {{ auth()->user()->name }}</div>
    <div class="card-body">
    <p class="card-text">Hello, Terima kasih sudah Login ke Sistem Survei Kepuasan Masyarakat !</p>
    </div>
  </div>


<h1 class ="h2" > {{ auth()->user()->role }}</h1> 
 
 </div>
<hr> 
 
 <h3> APLIKASI SISTEM INFORMASI SURVEI KEPUASAN MASYARAKAT</h3>



 
 <img src="img/sikemas.png" class="img-fluid" alt="...">

 

@endsection