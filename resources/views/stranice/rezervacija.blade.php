@extends('layouts.app')
@section('content')

  <br><br><h2 class="text-center grow"><b style="text-shadow: 4px 4px 6px #ffffff;">REZERVACIJA</b></h2><br>
  <div class="container" style="background-color:gray;border-radius:15px;border-top:5px solid #eeddee;border-right:5px solid #eeddee;">
    <form method="post" action="{{url('/rezervacija/spremiRez')}}"><br><br>
      @csrf
    <div class="row">
      <div class="col-md-6 text-right">
        <div class="form-group">
          <input type="text" class="form-control" name="ime_prezime" placeholder="Ime i prezime...">
        </div><br>
        <div class="form-group">
          <input type="number" class="form-control" name="gosti" placeholder="Broj gostiju...">
        </div><br>
        <input type="submit" class="btn btn-success grow" value="POTVRDI!">
      </div><br>
      <div class="col-md-6 text-left">
        <div class="form-group">
          <input type="datetime-local" class="form-control" name="datum" placeholder="Datum...">
        </div><br>
        <div class="form-group">
          <input type="text" class="form-control" name="telefon" placeholder="Vaš telefon...">
        </div><br>
        <input type="reset" class="btn btn-danger grow" value="PONIŠTI!">
      </div>
    </div>



    </form><br>
    @if(session()->has('rez'))

        <div class="alert alert-success text-center">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            &times;</button>

            {{session()->get('rez')}}
        </div>

    @endif
  </div><br>
  <div class="container text-center dim">
    <img class="img-responsive" src="https://cdn-images-1.medium.com/max/2000/1*wMiHlTSvDzXVx2-9z3kp5A.jpeg" style="border-radius:10px;border-top:5px solid lightyellow;border-right:5px solid lightyellow;">
  </div><br><br>



  @include('inc.footer')
@endsection
