@extends('dashboard.layouts.main')
<link rel="stylesheet" type="text/css" href="../../css/01homeawal.css">
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="animate__animated animate__bounceInRight text-center h2">Kuesioner</h1>
 </div>    
 
  <div class="container">
    <div class="row justify-content-center">
      <div class ="col-md-8">
        
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
        {{ session('success') }}
       </div>
       @endif

      

      
        <form method="POST" action="{{ route('kuesioner.postCreateStep1') }}" enctype="multipart/form-data">
         <div class="card">
          <div class="card-header">OPD & Category</div>

          <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name">
            <label for="name">Name</label>
          </div>

         
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

                <div class="mb-3">
                  <label for="category_id" class="form-label">Choose Category!</label>
                  <select class="form-select" name="category_id">
                    @foreach($categories as $category)
                  
                    <option value="{{ $category->id }}">{{ $category->name }}</option>     
                    @endforeach        
                  </select>
                </div>
              </div>
            </div>


           
        <div class="card-footer">
            <div class="card-footer text-right">
                <div class="form-group row mb-0">
                  <div class="col-md-12">
                   <button type="submit" class="btn btn-primary">
                    Next
                  </button>
              </div>
            </div>
            </div>
        </div>
         </div>
        </form>
        </div>
    </div>
</div>
      
@endsection