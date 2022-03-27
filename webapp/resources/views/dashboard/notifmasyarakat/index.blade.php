@extends('dashboard.layouts.main')
<link rel="stylesheet" type="text/css" href="../../css/01homeawal.css">
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
align-items-center pt-3 pb-2 mb-3 border-bottom">

<h1 class="animate__animated animate__bounceInRight text-center h2">List Pengumuman</h1>   
<hr>





 </div>
 @if(session()->has('success'))
 <div class="alert alert-success" role="alert">
 {{ session('success') }}
</div>
@endif
<label class="h4">Pengumuman </label>   



  <div class="table-responsive" col-lg-8>
  
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
    
          <th scope="col">Subject</th>
      
        </tr>
      </thead>
      <tbody>
        @foreach($notiff as $notiff)
        <tr>
          <td>{{ $loop->iteration }}</td>
         
          <td>{{ $notiff->subject}}</td>
       
         
         
        </tr>
        @endforeach
       
      </tbody>
    </table >
   
   
  </div>

  
@endsection