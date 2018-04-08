@extends('layouts.app')
@section('content')<br><br>
<h1 class="text-center"><i>Naše recenzije</i></h1><hr>
<div class="container"><br>
  @foreach($recs as $row)
  <div id="rec" class="bg-white text-center grow" style="border-radius:15px !important;border:1px solid gray !important;"><br>
    <h2><i class="fa fa-star" aria-hidden="true"></i>&nbsp;{{$row->title}}</h2><br>
    <cite><i>-{{$row->body}}</i></cite><br><br>
  </div><br><br>
  @endforeach<br>
</div>
@include('inc.footer')
@endsection
