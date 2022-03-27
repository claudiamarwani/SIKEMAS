@extends('dashboard.layouts.main')
<link rel="stylesheet" type="text/css" href="../../css/01homeawal.css">
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
align-items-center pt-3 pb-2 mb-3 border-bottom">

<h1 class="animate__animated animate__bounceInRight text-center h2">List Kuesioner dari saudara/i {{ $kuesioner->name }} </h1>   

</div>
<article class ="my-8 fs-8">
  <h4>Keterangan : </h4>           
  <p>5 : Sangat Baik </p>
  <p>4 : Baik</p>
  <p>3 : Cukup Baik</p>
  <p>2 : Cukup</p>  
  <p>1 : Tidak Baik Sama Sekali</p>
</article>


<div class="table-responsive" col-lg-8>
  
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Number</th>
       
        <th scope="col">Name</th>
       
        <th scope="col">OPD</th>
        <th scope="col">Category</th>
        <th scope="col">Answer 1</th>
        <th scope="col">Answer 2</th>
        <th scope="col">Answer 3</th>
        <th scope="col">Answer 4</th>
        <th scope="col">Answer 5</th>
        <th scope="col">Created</th>
       
        
    
      </tr>
    </thead>
    <tbody>
      @foreach($kuesioneres as $kuesioner)
      <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $kuesioner->name }}</td>
          <td>{{ $kuesioner->opd->name }}</td>
          <td>{{ $kuesioner->category->name }}</td>
          <td>{{ $kuesioner->A1 }}</td>
          <td>{{ $kuesioner->A2 }}</td>
          <td>{{ $kuesioner->A3 }}</td>
          <td>{{ $kuesioner->A4 }}</td>
          <td>{{ $kuesioner->A5 }}</td>
          <td>{{ $kuesioner->created_at }}</td>
          
            <td>
              <a href="/dashboard/adminviewkuesioner/{{ $kuesioner->id}}"class="badge bg-info"><span data-feather  = "eye"></span></a>
            </td>
           
           
          
        
        
            
        
        
       
      </tr>

      @endforeach
     
    </tbody>
  </table >
</div>



 

@endsection