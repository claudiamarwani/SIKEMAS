@extends('dashboard.layouts.main')
<link rel="stylesheet" type="text/css" href="../../../css/01homeawal.css">
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="animate__animated animate__bounceInRight text-center h2">OPD Baru</h1> <img src="/img/pencil.png">
 </div>    
 <hr>
 <a href="/dashboard/kuesioners" class="btn btn-success"><span data-feather ="arrow-left">Back</a>
  <hr>
<div class="col-lg-8">
    <form method="post" action="/dashboard/kuesioners">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Masukkan OPD Baru</label>
          <input type="text" class="form-control" id="name" name="name">
  
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Masukkan Slug OPD Baru</label>
          <input type="text" class="form-control" id="slug" name="slug">
  
        </div>
      

    
     
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>



@endsection