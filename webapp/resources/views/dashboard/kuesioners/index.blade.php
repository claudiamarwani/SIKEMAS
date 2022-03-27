@extends('dashboard.layouts.main')
<link rel="stylesheet" type="text/css" href="../../css/01homeawal.css">
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
align-items-center pt-3 pb-2 mb-3 border-bottom">

<h1 class="animate__animated animate__bounceInRight text-center h2">Edit Kuesioner </h1>   <img src="/img/write.png">
</div>
<hr>




 
    {{-- TOASTR NOTIF --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
      @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
      @endif
    </script>
     {{-- TOASTR NOTIF --}} 



<label class="h4">List OPD</label>   


 <div class="table-responsive" col-lg-8>
  
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          
          <th scope="col">OPD</th>
        
          <th scope="col">Delete</th>
      
        </tr>
      </thead>
      <tbody>
        @foreach($opdes as $opd)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $opd->name }}</td>
          <td>
            <a href="/dashboard/kuesioners/delete/{{ $opd->id }}" class="btn btn-danger"onclick="return confirm('Delete your Keluhan ?')">Delete</a>
           
          </td>
         
        </tr>
        @endforeach
       
      </tbody>
    </table >
    <hr>

    
    
    <a href="/dashboard/kuesioners/create" class="btn btn-primary mb-3">Menambah OPD</a>
    <hr>
  </div>
  <hr>

  <label class="h4">List Category</label>   
 {{-- TOASTR NOTIF --}}
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <script>
   @if(Session::has('success1'))
     toastr.success("{{ Session::get('success1') }}")
   @endif
 </script>
  {{-- TOASTR NOTIF --}} 

 <div class="table-responsive" col-lg-8>
  
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          
          <th scope="col">Category</th>
        
          <th scope="col">Delete</th>
      
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $category)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
          <td>
            <a href="/dashboard/kuesioners/delete2/{{ $category->id }}" class="btn btn-danger"onclick="return confirm('Delete your Keluhan ?')">Delete</a>
          </td>
          
          
            
        
          
         
        </tr>
        @endforeach
       
      </tbody>
    </table >
    <hr>
    <a href="/dashboard/kuesioners/create2" class="btn btn-primary mb-3">Menambah Category</a>
 

@endsection