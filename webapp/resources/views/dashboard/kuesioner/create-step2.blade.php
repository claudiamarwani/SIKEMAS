@extends('dashboard.layouts.main')
<link rel="stylesheet" type="text/css" href="../../css/01homeawal.css">
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Kuesioner</h1>


  <hr>
 </div>


  <div class="container">
    <div class="row justify-content-center">
      <div class ="col-md-8">
        <form action="{{ route('dashbiard.kuesioner.postCreateStep2') }}" method="POST" enctype="multipart/form-data">
         <div class="card">
          <div class="card-header">Kuesioner</div>
            <div class="card-body">
                @csrf
              <div class ="form-group">
                <div class="col-md-12">
                  <label>Silahkan Pilih Category</label>
                  <hr>
                  <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select class="form-select" name="category_id">
                      @foreach($categories as $category)
                    
                      <option value="{{ $category->id }}">{{ $category->name }}</option>     
                      @endforeach        
                    </select>
                  </div>

                    

                  
                  <label>Pertanyaan 1</label>
                  @php
                    $i = 5;                      
                  @endphp
                  @foreach ($keterangan as $item) 
                   <div class="form-check">
                       <label class="form-check-label">
                           <input type="radio" name="A1" class="form-check-input" value="{{ $i }}" {{ $i == old('A1',$kuesioner->A1??'')? 'checked':'' }}>
                           {{ $item }}
                       </label>
                   </div>
                   @php
                        $i--;   
                   @endphp
                   @endforeach
                   
                   @error('A1')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                   @enderror
                </div>
             
            </div>


            <div class ="form-group">
                <div class="col-md-12">
                  <label>Pertanyaan 2</label>
                  @php
                  $i = 5;                      
                @endphp
                @foreach ($keterangan as $item) 
                    <div class="form-check">
                       <label class="form-check-label">
                           <input type="radio" name="A2" class="form-check-input"  value="{{ $i }}" {{ $i == old('A2',$kuesioner->A2??'')? 'checked':'' }}>
                           {{ $item }}
                       </label>
                   </div>
                   @php
                   $i--;   
              @endphp
              @endforeach
                   
                @error('A2')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                   @enderror
                </div>
             
            </div>


         
            </div>
     
      



              </div>
            </div>
            <div class="card-footer text-right">
              <div class="form-group row mb-0">
                <div class="col-md-12">
                    <a href="{{ URL::to('dashboard/kuesioner') }}" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </div>
          </div>
            </div>
        </form>
      </div>
    </div>
  </div>
      

     
          
          
      
@endsection