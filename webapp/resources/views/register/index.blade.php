@extends('layouts.main')
<link rel="stylesheet" type="text/css" href=" css/01homeawal.css">
@section('container')
<div class ="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration">
          @if(session()->has('success'))
          <div class="alert alert-success" role="alert">
          {{ session('success') }}
         </div>
         @endif



    <form action="/register" method="POST" enctype="multipart/form-data">
        @csrf
           
        <img class="img-thumbnail rounded-circle "  src="../img/welcomeUser3.jpeg" alt="" width="122" height="107">

      <h1 class="h3 mb-1    fw-normal text-center">Registration Form</h1>

    
  
      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        <label for="email">Email address</label>
      </div>

      <div class="form-floating">
        <input type="password" name ="password" class="form-control" id="password" placeholder="Password">
        <label for="password">Password</label>
      </div>
     

      <div class="form-floating">
        <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name">
        <label for="name">Name</label>
      </div>

      <div class="form-floating">
        <input type="text" name="address" class="form-control" id="address" placeholder="address">
        <label for="address">Address</label>
      </div>

      <div class="form-floating">
        <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK">
        <label for="nik">NIK</label>
      </div>

      <div class="form-floating">
        <input type="text" name="phonenumber" class="form-control" id="phonenumber" placeholder="0812********">
        <label for="phonenumber">Phone Number</label>
      </div>
<hr>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="role" id="role" value="ADMIN">
        <label class="form-check-label" for="role">ADMIN</label>
    </div>
    
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="role" id="role" value="MASYARAKAT">
        <label class="form-check-label" for="role">MASYARAKAT</label>
    </div>

    <hr>  
     
     <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="gender" value="Male">
        <label class="form-check-label" for="gender">Male</label>
    </div>
    
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
        <label class="form-check-label" for="gender">Female</label>
    </div>  <div class="form-check form-check-inline">
<hr>
      <div class="mb-3">
        <label for="image" class="form-label">Upload Your Image</label>
        <input class="form-control" type="file" id="image" name="image">
      </div>
      <button class="w-100 btn btn-lg btn-primary mt-0 " type="submit">Register</button>
   
    </form>
    <small class= "d-block text-center mt-0">You do have acound? <a href="/login">Login Now!<a></small>
        <p class="mt-5 mb-3 text-muted">&copy; sikemas2021</p>
  </main>
    
@endsection