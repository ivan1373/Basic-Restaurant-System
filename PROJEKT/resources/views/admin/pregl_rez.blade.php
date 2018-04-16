@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>PREGLED REZERVACIJA</h1><br><br><br>

@stop

@section('content')
<div class="container-fluid" style="background-color:#dddddd;border-top:2px solid darkgray;border-right:2px solid darkgray;border-radius:15px;">
<div class="table-responsive">
<table class="table table-bordered table-striped table-responsive">
<thead class="thead-dark">
<tr>
  <th class="text-center">#</th>
  <th class="text-center">Ime i prezime</th>
  <th class="text-center">Telefon</th>
  <th class="text-center">Broj Gostiju</th>
  <th class="text-center">Datum</th>
  <th class="text-center">Status</th>
  <th class="text-center">Radnja</th>
</tr>
</thead>
<tbody>
@foreach($rezs as $rez)
<tr>
  <td class="text-center">{{$rez->id}}</td>
  <td class="text-center">{{$rez->ime_prezime}}</td>
  <td class="text-center">{{$rez->br_telefona}}</td>
  <td class="text-center">{{$rez->gosti}}</td>
  <td class="text-center">{{$rez->datum}}</td>
  <td class="text-center">{{($rez->odobrena)?'PRIHVAĆENA':'NEPRIHVAĆENA'}}</td>
  <td class="text-center"><a class="btn btn-success" href="{{ url('/admin/pregl_rez/prihvati/')}}/{{ $rez->id }}" role="button">PRIHVATI!</a>&nbsp &nbsp
    <a class="btn btn-danger" href="{{ url('/admin/pregl_rez/brisi/')}}/{{ $rez->id }}" role="button">IZBRIŠI!</a>
  </td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>

@stop
@push('css')

@push('js')
