@extends('dashboard.layouts.main')
<link rel="stylesheet" type="text/css" href="../../css/01homeawal.css">
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
align-items-center pt-3 pb-2 mb-3 border-bottom">

<h1 class="h2">Edit Kuesioner </h1>   
<hr>




 </div>
 @if(session()->has('success'))
 <div class="alert alert-success" role="alert">
 {{ session('success') }}
</div>
@endif
<label class="h4">List Category</label>   


<div class="table-responsive" col-lg-8>
 
   <table class="table table-striped table-sm">
     <thead>
       <tr>
         <th scope="col">No</th>
         
         <th scope="col">Category</th>
       
         <th scope="col">Action</th>
     
       </tr>
     </thead>
     <tbody>
       @foreach($categories as $category)
       <tr>
         <td>{{ $loop->iteration }}</td>
         <td>{{ $category->name }}</td>
         
         
         <td>
       
           <form action="/dashboard/infokeluhan/{{ $category->slug }}" method="post" class="d-inline">
             @method('delete')
             @csrf
             <button class="badge bg-danger border-0" onclick="return confirm('Hapus OPD ?')"><span data-feather="delete"></span></button>
           </form>
         
         </td>
        
       </tr>
       @endforeach
      
     </tbody>
   </table >
   <hr>
   <a href="/dashboard/infokeluhan/create" class="btn btn-primary mb-3">Menambah Category</a>
   <hr>
 </div>


 

@endsection