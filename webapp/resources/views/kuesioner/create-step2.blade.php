@extends('dashboard.layouts.main')
<link rel="stylesheet" type="text/css" href="../../css/01homeawal.css">
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="animate__animated animate__bounceInRight text-center h2">Kuesioner</h1>
 </div>    
 

<hr>
  <div class="container">
    <div class="row justify-content-center">
      <div class ="col-md-8">
        <form action="{{ route('kuesioner.postCreateStep2') }}" method="POST" enctype="multipart/form-data">
         <div class="card">
          <div class="card-header">Pilihan Salah Satu Options dan jangan lupa untuk kirim kuesioner Anda !</div>
            <div class="card-body">
                @csrf

                <div class ="form-group">
                  <div class="col-md-12">
  
  
                   
                      <label>1. Bagaimana pendapat saudara tentang kesesuaian persyaratan Pelayanan dengan jenis pelayanannya</label>
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
                <hr>
    
    
                <div class ="form-group">
                    <div class="col-md-12">
                      <label>2.Bagaimana pemahaman saudara tentang kemudahan prosedur pelayanan di unit ini</label>
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
            
<hr>

              <div class ="form-group">
                <div class="col-md-12">
                  <label>3.Bagaimana pendapat saudara tentang kecepatan waktu dalam memberikan pelayanan</label>
                  @php
                    $i = 5;                      
                  @endphp
                  @foreach ($keterangan as $item) 
                   <div class="form-check">
                       <label class="form-check-label">
                           <input type="radio" name="A3" class="form-check-input"  value="{{ $i }}" {{ $i == old('A3',$kuesioner->A3??'')? 'checked':'' }}>
                           {{ $item }}
                       </label>
                   </div>
                   @php
                        $i--;   
                   @endphp
                   @endforeach
                   
                   @error('A3')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                   @enderror
                </div>
             
            </div>
            <hr>


            <div class ="form-group">
                <div class="col-md-12">
                  <label>4.Bagaimana pendapat saudara tentang kewajaran biaya/tarif dalam pelayanan</label>
                  @php
                        $i = 5;            
                @endphp
                @foreach ($keterangan as $item) 
                    <div class="form-check">
                       <label class="form-check-label">
                           <input type="radio" name="A4" class="form-check-input"  value="{{ $i }}" {{ $i == old('A4',$kuesioner->A4??'')? 'checked':'' }}>
                           {{ $item }}
                       </label>
                   </div>
                   @php
                   $i--;   
              @endphp
              @endforeach
                   
                @error('A4')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                   @enderror
                </div>
            </div>

            <hr>
            <div class ="form-group">
              <div class="col-md-12">
                <label>5. Bagaimana pendapat saudara tentang produk pelayanan antara yang tercantum dalam standart pelayanan dengan hasil yang diberikan.</label>
                @php
                      $i = 5;            
              @endphp
              @foreach ($keterangan as $item) 
                  <div class="form-check">
                     <label class="form-check-label">
                         <input type="radio" name="A5" class="form-check-input"  value="{{ $i }}" {{ $i == old('A5',$kuesioner->A5??'')? 'checked':'' }}>
                         {{ $item }}
                     </label>
                 </div>
                 @php
                 $i--;   
            @endphp
            @endforeach
                 
              @error('A5')
                      <span class="text-danger">
                          <strong>{{ $message }}</strong>
                      </span>
                 @enderror
              </div>
          </div>
      
        <div class="card-footer">
            <div class="card-footer text-right">
                <div class="form-group row mb-0">
                  <div class="col-md-12">
                    <a href="/kuesioner/create-step1" class="btn btn-success">Back</a>
 
                   <button type="submit" class="btn btn-primary">
                    Submit
                  </button>
              </div>
            </div>
            
            </div>
        </div>
        </form>
        </div>
    </div>
</div>
      
@endsection