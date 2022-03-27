@extends('dashboard.layouts.main')
<link rel="stylesheet" type="text/css" href="../../css/01homeawal.css">
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
align-items-center pt-3 pb-2 mb-3 border-bottom">

  <h1 class="animate__animated animate__bounceInRight text-center h2">List Kuesioner for All Public </h1>

</div>



<div class="table-responsive" col-lg-8>

  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Number</th>

        <th scope="col">Name</th>

        <th scope="col">OPD</th>
        <th scope="col">Category</th>
        <th scope="col">Jawaban 1</th>
        <th scope="col">Jawaban 2</th>
        <th scope="col">Jawaban 3</th>
        <th scope="col">Jawaban 4</th>
        <th scope="col">Jawaban 5</th>





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
      </tr>

      @endforeach

    </tbody>
  </table>
</div>





@endsection