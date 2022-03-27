@extends('dashboard.layouts.main')
<link rel="stylesheet" type="text/css" href=" ../../css/01homeawal.css">
@section('container')

<div class="container">
    <div class="row  my-3">
        <div class="col-lg-8">
            <h1>Subject :</h1>
            <label>{{ $infokeluhan->subject }}</label       >
         
<hr>               

            <article class ="my-3 fs-5">
                <h1>Nama - NIK :</h1>
                {!!  $infokeluhan->user->name  !!} - {!!  $infokeluhan->user->nik  !!}
                <hr>
                <h1>Keluhan :</h1>
                {!! $infokeluhan->body  !!}
                <hr>
                <h1>Post tanggal :</h1>
                {!! $infokeluhan->created_at !!}

            </article>
<hr>
<a href="/dashboard/infokeluhan" class="btn btn-success"><span data-feather ="arrow-left">Back to my post</a>
        </div>
    </div>
</div>

          
@endsection