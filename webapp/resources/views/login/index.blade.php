@extends('layouts.main')
<link rel="stylesheet" type="text/css" href=" css/01homeawal.css">
@section('container')

<div class ="row justify-content-center">
    <div class="col-md-4">
     
     @if(session()->has('success'))
     <div class="alert alert-danger" role="alert">
     {{ session('success') }}
    </div>
    @endif


        <main class="form-signin">
    <form action="/login" method="post">
        @csrf
      
      <img class="animate__animated animate__flash text-center img-thumbnail rounded-circle " src="../img/welcomeUser3.jpeg" alt="" width="142" height="127">
      <h1 class="animate__animated animate__bounceIn h3 mb-3 fw-normal text-center">Login User </h1>
  
      <div class="form-floating">
        <input type="text" name="email" class="animate__animated animate__slideInUp form-control @error('email') is-invalid @enderror" id="email" placeholder="nama@example.com" autofocus required>
        <label for="email">Email</label> 
        @error('email')
          <div class = "invalid-feedback">
            {{ $message }}
        @enderror 
      </div>
      <div class="form-floating">
        <input type="password" name ="password" class="animate__animated animate__slideInUp form-control mt-3" id="password" placeholder="Password" required>
        <label for="password">Password</label>
      </div>
  
      <div class="animate__animated animate__slideInUp  checkbox mb-3">
     
      </div>
      <button class="animate__animated animate__slideInUp  w-100 btn btn-lg btn-primary" type="submit">Login</button>
   
    </form>
    <small class= "animate__animated animate__slideInUp  d-block text-center mt-4">Not Registered? <a href="/register">Register Now!<a></small>
        <p class="animate__animated animate__slideInUp  mt-5 mb-3 text-muted">&copy; sikemas2021</p>
  </main>
    
@endsection