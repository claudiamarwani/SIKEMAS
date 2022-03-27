@extends('dashboard.layouts.main')
<link rel="stylesheet" type="text/css" href="../../css/01homeawal.css">
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="animate__animated animate__bounceInRight text-center h2">Pengumuman Baru</h1>

 </div>    
 <a href="/dashboard/notif" class="btn btn-success"><span data-feather ="arrow-left">Back</a>
  <hr>
<div class="col-lg-8">
    <form method="post" action="/dashboard/notif">
        @csrf
        <div class="mb-3">
          <label for="subject" class="form-label">Isi</label>
          <input type="text" class="form-control" id="subject" name="subject">
  
        </div>
       

          

       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>



  @endsection