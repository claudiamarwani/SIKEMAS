@extends('dashboard.layouts.main')
<link rel="stylesheet" type="text/css" href="../../css/01homeawal.css">
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
align-items-center pt-3 pb-2 mb-3 border-bottom">

<h1 class="animate__animated animate__bounceInRight text-center h2">INFORMASI KELUHAN </h1>   
<hr>





 </div>
 @if(session()->has('success'))
 <div class="alert alert-success" role="alert">
 {{ session('success') }}
</div>
@endif
<label class="h4">Keluhan Saya </label>   


 <div class="table-responsive" col-lg-8>
  
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">OPD</th>
          <th scope="col">Category</th>
          <th scope="col">Subject</th>
      
          <th scope="col">View</th>
          <th scope="col">Update</th>
          <th scope="col">Delete</th>
      
        </tr>
      </thead>
      <tbody>
        @foreach($infokeluhans as $infokeluhan)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $infokeluhan->opd->name }}</td>
          <td>{{ $infokeluhan->category->name }}</td>
          <td>{{ $infokeluhan->subject }}</td>
          
          <td>
            <a href="/dashboard/infokeluhan/{{ $infokeluhan->slug }}"class="badge bg-info"><span data-feather  = "eye"></span></a>
          </td>
          <td>
            <a href="/dashboard/infokeluhan/{{ $infokeluhan->slug }}/edit"class="badge bg-warning"><span data-feather  = "edit-3"></span></a>
          </td>
          <td>
            <form action="/dashboard/infokeluhan/{{ $infokeluhan->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Delete your Keluhan ?')"><span data-feather="delete"></span></button>
            </form>
          
          </td>
         
        </tr>
        @endforeach
       
      </tbody>
    </table >
    <hr>
    <a href="/dashboard/infokeluhan/create" class="btn btn-primary mb-3">Create Keluhan</a>
    <hr>
  </div>

  
@endsection