@extends('dashboard.layouts.main')
<link rel="stylesheet" type="text/css" href="../../css/01homeawal.css">
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
align-items-center pt-3 pb-2 mb-3 border-bottom">

  <h1 class="animate__animated animate__bounceInRight text-center h2">Infomasi Keluhan View </h1>
  <hr>




</div>
@if(session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif
<label class="h4">List Informasi Keluhan Semua Masyarakat</label>


<div class="table-responsive" col-lg-8>

  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">OPD</th>
        <th scope="col">Category</th>
        <th scope="col">Subject</th>
        <th scope="col">Keluhan</th>
        <th scope="col">Date Post</th>




        <th scope="col">Delate</th>

      </tr>
    </thead>
    <tbody>
      @foreach($infokeluhans as $infokeluhan)
      <tr>

        <td>{{ $loop->iteration }}</td>
        <td>{{ $infokeluhan->user->name }}</td>
        <td>{{ $infokeluhan->opd->name }}</td>
        <td>{{ $infokeluhan->category->name }}</td>
        <td>{{ $infokeluhan->subject }}</td>
        <td>{{ $infokeluhan->body }}</td>
        <td>{{ $infokeluhan->created_at }}</td>


        <td>
          <a href="/dashboard/infokeluhanadmin/delete3/{{ $infokeluhan->id }}" class="btn btn-danger"
            onclick="return confirm('Delete your Keluhan ?')">Delete</a>
        </td>




      </tr>

      @endforeach

    </tbody>
  </table>
</div>
<hr>





@endsection