@extends('dashboard.layouts.main')
<link rel="stylesheet" type="text/css" href="../../css/01homeawal.css">
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="animate__animated animate__bounceInRight text-center h2">Keluhan Baru</h1>

 </div>    
 <a href="/dashboard/infokeluhan" class="btn btn-success"><span data-feather ="arrow-left">Back</a>
  <hr>
<div class="col-lg-8">
    <form method="post" action="/dashboard/infokeluhan">
        @csrf
        <div class="mb-3">
          <label for="subject" class="form-label">Subject</label>
          <input type="text" class="form-control" id="subject" name="subject">
  
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control  " id="slug" name="slug">
          </div>

          
          <div class="mb-3">
            <label for="opd_id" class="form-label">OPD</label>
            <select class="form-select" name="opd_id">
              @foreach($opdes as $opd)
            
              <option value="{{ $opd->id }}">{{ $opd->name }}</option>     
              @endforeach        
            </select>
          </div>

          <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-select" name="category_id">
              @foreach($categories as $category)
            
              <option value="{{ $category->id }}">{{ $category->name }}</option>     
              @endforeach        
            </select>
          </div>

          <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input id="body" type="hidden" name="body">
            <trix-editor input="body"></trix-editor>
          </div>
     
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>


<script>
  document.addEventListener('trix-file-accept',function(e){
    e.preventDefault();
  })
</script>
  @endsection