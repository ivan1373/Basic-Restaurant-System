@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>INFORMACIJE O PRIJAVLJENOM ADMINISTRATORU</h1><br><br>
@stop

@section('content')
<div class="container text-centers" style="background-color:white;border-radius:10px;border-top:2px solid indigo;border-right:2px solid indigo;">
  <div class="row">
  <div class="col-sm-6 text-center" style="border:0.5px solid #dddddd;border-radius:15px;">
  <img class="img-responsive" src="https://www.knowmuhammad.org/img/noavatarn.png"><br>
  @if(session()->has('message'))
    <div class="row">
      <div style="background-color:#D4EDDA!important;color:green!important;" class="alert alert-success text-center">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
          &times;</button>

          {{session()->get('message')}}
      </div>
    </div>
  @endif
</div>
<div class="col-sm-6">
  <h3 class="text-center">Trenutni podaci:</h3><hr style="height: 12px;border: 0;box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">
<br><br>
<ul class="list-group">
  <li class="list-group-item">
    <b>Ime </b><i class="fa fa-arrow-right"></i> &nbsp&nbsp<cite>{{Auth::user()->name}}</cite>
  </li><br>
  <li class="list-group-item">
    <b>E-mail adresa </b> <i class="fa fa-arrow-right"></i> &nbsp&nbsp<cite>{{Auth::user()->email}}</cite>
  </li><br>
  <li class="list-group-item">
    <b>Lozinka </b><i class="fa fa-arrow-right"></i> &nbsp&nbsp<cite>{{Auth::user()->password}}</cite>
  </li><br>
</ul>
</div>
</div><br><br>
<div class="row">
  <div class="col-sm-6">
    <h3 class="text-center">Promijenite podatke:</h3><hr style="height: 12px;border: 0;box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">
  <form method="post" action="{{ url('/admin/info') }}/{{Auth::user()->id}}">
    @csrf
    {{method_field('PUT')}}
    <div class="form-group">
      <input type="text" class="form-control" name="novoIme" placeholder="Ime...">
    </div><br>
    <div class="form-group">
      <input type="email" class="form-control" name="noviMail" placeholder="E-mail...">
    </div><br>
    <div class="form-group">
      <input type="text" class="form-control" name="novaLozinka" placeholder="Lozinka...">
    </div><br>
    <div class="form-group">
      <input type="submit" class="btn btn-primary form-control" value="POTVRDA">
    </div><br>
  </form>
</div>

</div>
</div>
<br><br><br>

@stop
@push('css')

@push('js')
