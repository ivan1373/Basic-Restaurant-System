@extends('layouts.app')
@section('content')

  <br><br><h2 class="text-center"><b style="text-shadow: 4px 4px 6px #ffffff;">REZERVACIJA</b></h2><br>
  <div class="container" style="background-color:gray;border-radius:15px;border-top:5px solid #eeddee;border-right:5px solid #eeddee;">
    <form><br><br>
    <div class="row">
      <div class="col-md-6 text-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Broj telefona...">
        </div><br>
        <div class="form-group">
          <input type="number" class="form-control" placeholder="Broj gostiju...">
        </div><br>
        <input type="submit" class="btn btn-success" value="POTVRDI!">
      </div>
      <div class="col-md-6 text-left">
        <div class="form-group">
          <input type="date" class="form-control" placeholder="Datum...">
        </div><br>
        <div class="form-group">
          <input type="number" class="form-control" placeholder="Vrsta rezervacije...">
        </div><br>
        <input type="reset" class="btn btn-danger" value="PONIŠTI!">
      </div>
    </div>



    </form><br>
  </div><br>
  <div class="container text-center">
    <img class="img-responsive" src="https://cdn-images-1.medium.com/max/2000/1*wMiHlTSvDzXVx2-9z3kp5A.jpeg" style="border-radius:10px;border-top:5px solid lightyellow;border-right:5px solid lightyellow;">
  </div><br><br>



  @include('inc.footer')
@endsection
