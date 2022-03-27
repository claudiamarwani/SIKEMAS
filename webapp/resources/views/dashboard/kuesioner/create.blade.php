    @extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Kuesioner SIKEMAS</h1>
 </div>    

<div class="col-lg-8">
    <form method="post" action="/dashboard/kuesioner">
        @csrf
        
        <div class="mb-3">
            <label for="category_id" class="form-label">Pilih Category</label>
            <select class="form-select" name="category_id">
               
         
              @foreach($categories as $category)
            
              <option value="{{ $category->id }}">{{ $category->name }}</option>     
              @endforeach        
            </select>
          </div>     
          
          <div class="mb-3">
            <label for="slug" class="form-label">Tanda pengisian</label>
            <input type="text" class="form-control  " id="slug" name="slug">
          
        
          </div>

     

           
                <div class="mb-3">
            <label for="kuesionerpertanyaan_id" class="form-label">Soal</label>
            <select class="form-select" name="kuesionerpertanyaan_id">
              @foreach($kuesionerpertanyaan as $kuesionerpertanyaan)
            
              <option value="{{ $kuesionerpertanyaan->id }}">{{ $kuesionerpertanyaan->soal }}</option>     
              @endforeach        
            </select>
          </div>

            
      
          <h5> Isilah Kuesioner Dibawah</h5>
         <hr>
         <h5> 1.Bagaimana pendapat saudara tentang kesesuaian persyaratan Pelayanan dengan jenis pelayanannya</h5>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jawaban" id="jawaban" value="A">
                <label class="form-check-label" for="jawaban">A</label>
            </div>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jawaban" id="jawaban" value="B">
                <label class="form-check-label" for="jawaban">B</label>
            </div>  <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jawaban" id="jawaban" value="C">
                <label class="form-check-label" for="jawaban">C</label>
            </div>  <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jawaban" id="jawaban" value="D">
                <label class="form-check-label" for="jawaban">D</label>
            </div>  <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jawaban" id="jawaban" value="E">
                <label class="form-check-label" for="jawaban">E</label>
            </div>  <div class="form-check form-check-inline">
<hr>
<h5>2.Bagaimana pemahaman saudara tentang kemudahan prosedur pelayanan di unit ini</h5>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jawaban1" id="jawaban1" value="A">
                <label class="form-check-label" for="jawaban1">A</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jawaban1" id="jawaban1" value="B">
                <label class="form-check-label" for="jawaban1">B</label>
            </div>  
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jawaban1" id="jawaban1" value="C">
                <label class="form-check-label" for="jawaban1">C</label>
            </div>  <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jawaban1" id="jawaban1" value="D">
                <label class="form-check-label" for="jawaban1">D</label>
            </div>  <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jawaban1" id="jawaban1" value="E">
                <label class="form-check-label" for="jawaban1">E</label>
            </div>  <div class="form-check form-check-inline">
              <hr>
              <h5>3.Bagaimana pendapat saudara tentang kecepatan waktu dalam memberikan pelayanan</h5>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jawaban2" id="jawaban2" value="A">
                        <label class="form-check-label" for="jawaban2">A</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jawaban2" id="jawaban2" value="B">
                        <label class="form-check-label" for="jawaban2">B</label>
                      </div>  <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jawaban2" id="jawaban2" value="C">
                        <label class="form-check-label" for="jawaban2">C</label>
                      </div>  <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jawaban2" id="jawaban2" value="D">
                        <label class="form-check-label" for="jawaban2">D</label>
                      </div>  <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jawaban2" id="jawaban2" value="E">
                        <label class="form-check-label" for="jawaban2">E</label>
                      </div>  <div class="form-check form-check-inline">
                        <hr>
                        <h5>4.Bagaimana pendapat saudara tentang kewajaran biaya/tarif dalam pelayanan</h5>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jawaban3" id="jawaban3" value="A">
                            <label class="form-check-label" for="jawaban3">A</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jawaban3" id="jawaban3" value="B">
                            <label class="form-check-label" for="jawaban3">B</label>
                          </div>  <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jawaban3" id="jawaban3" value="C">
                            <label class="form-check-label" for="jawaban3">C</label>
                          </div>  <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jawaban3" id="jawaban2" value="D">
                            <label class="form-check-label" for="jawaban3">D</label>
                          </div>  <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jawaban3" id="jawaban3" value="E">
                            <label class="form-check-label" for="jawaban3">E</label>
                          </div>  <div class="form-check form-check-inline">
                            <hr>

                            <h5>5.Bagaimana pendapat saudara tentang produk pelayanan antara yang tercantum dalam standart pelayanan dengan hasil yang diberikan</h5>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban4" id="jawaban4" value="A">
                                <label class="form-check-label" for="jawaban4">A</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban4" id="jawaban4" value="B">
                                <label class="form-check-label" for="jawaban4">B</label>
                              </div>  <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban4" id="jawaban4" value="C">
                                <label class="form-check-label" for="jawaban4">C</label>
                              </div>  <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban4" id="jawaban4" value="D">
                                <label class="form-check-label" for="jawaban4">D</label>
                              </div>  <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban4" id="jawaban4" value="E">
                                <label class="form-check-label" for="jawaban4">E</label>
                              </div>  <div class="form-check form-check-inline">
            
                
                   

            
               


             

              

              
        <hr>

          

          
     
        <button type="submit" class="btn btn-primary">Submit Kuesioner</button>
      </form>
</div>
<hr>



@endsection