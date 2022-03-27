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
        <form method="POST" action="{{ route('dashboard.kuesioner.postCreateStep1') }}" enctype="multipart/form-data">
         <div class="card">
          <div class="card-header">Pilih OPD</div>
            <div class="card-body">
                @csrf
                
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