@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>PREGLED KORISNIČKIH RECENZIJA</h1><hr><br>

@stop

@section('content')
<div class="container-fluid"><br>
  @foreach($recs as $row)
  <div class="text-center" style="background-color:lightgreen;border-radius:15px !important;border-top:3px solid blue;border-right:3px solid blue;"><br>
    <h2><i class="fa fa-star" aria-hidden="true"></i>&nbsp;{{$row->title}}</h2><br>
    <cite><i>-{{$row->body}}</i></cite><br><br>
  </div><br><br>
  @endforeach<br>
</div>
@stop
@push('css')

@push('js')
