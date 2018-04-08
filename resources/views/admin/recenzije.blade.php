@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>PREGLED KORISNIČKIH RECENZIJA</h1><hr><br>

@stop

@section('content')
<div class="container-fluid"><br>
  @foreach($recs as $row)
  <div class="text-center" style="background: #3D7EAA;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FFE47A, #3D7EAA);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FFE47A, #3D7EAA); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
border-radius:15px !important;border-top:3px solid blue;border-right:3px solid blue;""><br>
    <h2><i class="fa fa-star" aria-hidden="true"></i>&nbsp;{{$row->title}}</h2><br>
    <cite><i>-{{$row->body}}</i></cite><br><br>
  </div><br><br>
  @endforeach<br>
</div>
@stop
@push('css')

@push('js')
