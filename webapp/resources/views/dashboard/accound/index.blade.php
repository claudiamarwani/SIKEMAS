@extends('dashboard.layouts.main')
<link rel="stylesheet" type="text/css" href="../../css/index.css">
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
align-items-center pt-3 pb-2 mb-3 border-bottom">

<h1 class="animate__animated animate__bounceInRight text-center">Profile</h1><span data-feather="user"></span>
</div>

<hr>
  <div class="container">
    <div class="row justify-content-center">
      <div class ="col-md-8" >
        <form action="" method="POST">
         <div class="card">
          @if(session()->has('success'))
          <div class="alert alert-success" role="alert">
          {{ session('success') }}
         </div>
         @endif
      

         
          <div class="card-header">Personal Data </div>
            <div class="card-body">
              
          
                <div class ="form-group">
                  <div class="col-md-12">
  
  
                   
                      <h5>Name:     {{ auth()->user()->name }}</h5>
                      <hr>
                      <h5> Email:   {{ auth()->user()->email }}</h5>
                      <hr>
                      <h5> Address:   {{ auth()->user()->address }}</h5>
                      <hr>
                      <h5> NIK:   {{ auth()->user()->nik }}</h5>
                      <hr>
                      <h5> Phone Number:   {{ auth()->user()->phonenumber }}</h5>
                      <hr>
                      <h5> Gender:   {{ auth()->user()->gender}}</h5>
                      <hr>
                      <h5> Role:   {{ auth()->user()->role }}</h5>
                     
                     
                    
                    
             
                    </div>
                 
                  
                 
                </div>
                
               
            


              
        
        </form>
        </div>
        
    </div>
    <hr>
    <span data-feather="settings"></span>
   <a href="{{ route('dashboard.accound.edit_profile') }}">Edit Profile</a>
    <hr>
</div>
@endsection 