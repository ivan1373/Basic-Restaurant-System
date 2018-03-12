@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')
    <h1>PREGLED MENIA</h1><br><br><br>


@stop

@section('content')
<div class="container-fluid table-responsive" style="background-color:#ddeedd;border-top:2px solid green;border-radius:15px;border-right:2px solid green;">

<table class="table table-bordered table-striped">
<thead class="thead-dark">
<tr>
  <th class="text-center">#</th>
  <th class="text-center">Slika</th>
  <th class="text-center">Naziv</th>
  <th class="text-center">Sastojci</th>
  <th class="text-center">Cijena</th>
  <th class="text-center">Radnja</th>
</tr>
</thead>
<tbody>
@foreach($menis as $row)
<tr>
  <td class="text-center">{{$row->id}}</td>
  <td style="width:35%;height:60%;"><img class="img-responsive" src="{{$row->link_slike}}"></td>
  <td class="text-center">{{$row->naziv}}</td>
  <td class="text-center">{{$row->sastojci}}</td>
  <td class="text-center">{{$row->cijena}}</td>
  <td class="text-center"><button role="button" class="btn btn-success">IZMIJENI!</button>&nbsp &nbsp
    <button role="button" class="btn btn-danger">IZBRIŠI!</button>
  </td>
</tr>
@endforeach
</tbody>
</table>

</div>
<br>
@stop
@push('css')

@push('js')
