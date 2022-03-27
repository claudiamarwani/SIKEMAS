@extends('dashboard.layouts.main')
<link rel="stylesheet" type="text/css" href="../../css/01homeawal.css">
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
align-items-center pt-3 pb-2 mb-3 border-bottom">

</div>
<div class="container">
    <div class="row justify-content-center">
<div class ="col-md-8" >

        <form action="{{route('dashboard.accound.update_profile') }}"id="edit_profile_form" method="post">
            @csrf
            @method('PUT')
            <div class = "card">
                <div class="card-header"> Update Your Profile</div>
                <div class="card-body">
                    <div class ="col-md-12" >
           
           
            <div class = "form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ (old('name'))?old('name'):$user->name }}"  class="form-control" id="name" placeholder="Enter Name">

                @if($errors->any('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <hr>
            
            <div class = "form-group">
                <label for="email">Email</label>
                <input type="email" name="email"  value="{{ (old('email'))?old('email'):$user->email }}"      class="form-control" id="email" placeholder="Enter Email">
                @if($errors->any('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <hr>
            <div class = "form-group">
                <label for="name">Address</label>
                <input type="text" name="address" value="{{ (old('address'))?old('address'):$user->address }}"  class="form-control" id="address" placeholder="Enter Address">

                @if($errors->any('address'))
                <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
            </div>
            <hr>
            
            <div class = "form-group">
                <label for="name">Phone Number</label>
                <input type="text" name="phonenumber" value="{{ (old('phonenumber'))?old('phonenumber'):$user->phonenumber}}"  class="form-control" id="phonenumber" placeholder="Enter Phone Number">

                @if($errors->any('phonenumber'))
                <span class="text-danger">{{ $errors->first('phonenumber') }}</span>
                @endif
            </div>
<hr>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="/dashboard/accound" class="btn btn-success">Back</a>
    </div>
</div>
</div>
</div>        
@endsection 