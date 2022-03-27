@extends('dashboard.layouts.main')
<link rel="stylesheet" type="text/css" href="../../../css/index.css">
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="animate__animated animate__bounceInRight text-center h2">Edit Keluhan</h1>
 </div>    
 <a href="/dashboard/infokeluhan" class="btn btn-success"><span data-feather ="arrow-left">Back</a>
  <hr>
<div class="col-lg-8">
    <form method="post" action="/dashboard/infokeluhan/{{ $infokeluhan->slug }}" class="mb-5">
      @method('put')
        @csrf

        <div class="mb-3">
          <label for="subject" class="form-label">Subject</label>
          <input type="text" class="form-control @error ('subject') is-invalid @enderror"  id="subject" 
          name="subject" required autofocus value="{{ old('subject', $infokeluhan->subject) }}">
          @error('subject')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="subject" class="form-label">Slug</label>
          <input type="text" class="form-control @error ('slug') is-invalid @enderror"  id="slug" 
          name="slug" required autofocus value="{{ old('slug', $infokeluhan->slug) }}">
          @error('slug')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

          
          <div class="mb-3">
            <label for="opd_id" class="form-label">OPD</label>
            <select class="form-select" name="opd_id">
              @foreach($opdes as $opd)
                @if(old('opd_id', $infokeluhan->opd_id)== $opd->id)
              <option value="{{ $opd->id }}" selected>{{ $opd->name }}</option>  
              @else   
              <option value="{{ $opd->id }}">{{ $opd->name }}</option>
              @endif  
              @endforeach        
            </select>
          </div>

          <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-select" name="category_id">
              @foreach($categories as $category)
                @if(old('category_id', $infokeluhan->catergory_id)== $category->id)
              <option value="{{ $category->id }}"selected>{{ $category->name }}</option> 
              @else     
               <option value="{{ $category->id }}">{{ $category->name }}</option> 
              @endif 
              @endforeach        
            </select>
          </div>

          <div class="mb-3">
            <label for="body" class="form-label">Body</label>

            <input id="body" type="hidden" name="body" value="  {{ old('body',$infokeluhan->body) }}">
            <trix-editor input="body"></trix-editor>
          </div>
     
        <button type="submit" class="btn btn-primary">Update Keluhan</button>
      </form>
</div>


<script>
  document.addEventListener('trix-file-accept',function(e){
    e.preventDefault();
  })
</script>
  @endsection