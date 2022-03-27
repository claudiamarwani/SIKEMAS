@extends('dashboard.layouts.main')
<link rel="stylesheet" type="text/css" href="../../../css/01homeawal.css">
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="animate__animated animate__bounceInRight text-center h2">Category Baru</h1> <img src="/img/pencil.png">
 </div>    
 <hr>
 <a href="/dashboard/kuesioners" class="btn btn-success"><span data-feather ="arrow-left">Back</a>
  <hr>
<div class="col-lg-8">
    <form method="post" action="/dashboard/kuesioners2">
        @csrf

        <div class="card-body">
          @csrf
        <div class ="form-group">
          <div class="col-md-12">
           
              <label>Choose OPD!</label>
                <div class="mb-3">
                <select class="form-select" name="opd_id">
                @foreach($opdes as $opd)
              
                <option value="{{ $opd->id }}">{{ $opd->name }}</option>     
                @endforeach        
                </select>
             
            </div>
          </div>
        </div>
        </div>

        <div class="mb-3">
          <label for="name" class="form-label">Masukkan Category Baru</label>
          <input type="text" class="form-control" id="name" name="name">
  
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Masukkan Slug Category  Baru</label>
          <input type="text" class="form-control" id="slug" name="slug">
  
        </div>
      

    
     
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>



@endsection