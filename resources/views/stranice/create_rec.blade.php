@extends('layouts.app')

@section('content')
<br><br>
<h1 class="text-center">Ostavite vašu recenziju!</h1><hr>
<br><br>
<div class="container-fluid" style="border:1px solid gray;border-radius:20px;border-top:3px solid indigo;border-right:3px solid indigo;">
  <form method="post" action="{{url('/create_rec/spremiRec')}}" disabled><br>
    @csrf

    <div class="form-group">
      <label class="b">&nbsp;Naslov</label>
      <input type="text" class="form-control" name="title">
    </div><br>
    <div class="form-group">
      <label class="b">&nbsp;Tekst</label>
      <textarea class="form-control" rows="5" name="body"></textarea><br>
    </div>
    <div class="text-center grow">
    <input type="submit" value="Potvrdi!" class="btn btn-success b">
  </div>
    <br>
  </form><br>
  @if(session()->has('rec'))

      <div class="alert alert-success text-center">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
          &times;</button>

          {{session()->get('rec')}}
      </div>

  @endif
</div><br><br>
<div class="container">
  <img  style="border-radius:5px;border:0.75px solid #112211;" class="img-responsive" src="https://media.npr.org/assets/img/2012/09/10/restaurant-review-1f1ede4d672918ad61b6072191a48560445184ff-s900-c85.jpg">
</div>

<br><br>
@include('inc.footer')
@endsection
