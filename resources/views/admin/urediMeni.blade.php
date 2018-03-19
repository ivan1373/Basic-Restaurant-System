@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>UREDI MENI!</h1><br>
@stop

@section('content')
<br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <h3 class="text-center" style="font-style:italic;">TRENUTNI PODACI O JELU</h3><hr style="height: 12px;border: 0;box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">
          <ul class="list-group" style="list-style-type:none;">
            <li class="list-group-item">
              <b>Naziv</b> &nbsp &nbsp<i class="fa fa-arrow-right"></i>&nbsp<cite>{{$meni -> naziv}}</cite>
            </li><br>
            <li class="list-group-item">
              <b>Sastojci</b> &nbsp &nbsp<i class="fa fa-arrow-right"></i>&nbsp<cite>{{$meni -> sastojci}}</cite>
            </li><br>
            <li class="list-group-item">
              <b>Cijena</b> &nbsp &nbsp<i class="fa fa-arrow-right"></i>&nbsp<cite>{{$meni -> cijena}}</cite>
            </li><br>
            <li class="list-group-item">
              <b>Slika</b> &nbsp &nbsp<i class="fa fa-arrow-right"></i>&nbsp<img class="img-responsive" src="{{$meni -> link_slike}}">
            </li>
          </ul>
        </div>
      </div><br><hr style="height: 12px;border: 0;box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);"><br>
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4 text-center" style="border:1px solid gray;border-radius:10px;">
          <h3 style="font-style:italic;">PROMIJENITE PODATKE</h3><hr style="height: 12px;border: 0;box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">
          <form method="post" action="{{ url('/admin/pregl_meni/urediMeni') }}/{{$meni->id}}">
            @csrf
            {{method_field('PUT')}}
            <div class="form-group">
              <input class="form-control" name="noviNaziv" type="text" placeholder="Novi Naziv...">
            </div><br>
            <div class="form-group">
              <input class="form-control" name="noviSastojci" type="text" placeholder="Novi Sastojci...">
            </div><br>
            <div class="form-group">
              <input class="form-control" name="novaCijena" type="text" placeholder="Nova Cijena...">
            </div><br>
            <div class="form-group">
              <input class="form-control" name="noviLink" type="text" placeholder="Novi Link Za Sliku...">
            </div><br>
            <input type="submit" class="btn btn-success" value="POTVRDI">
          </form><br>
        </div>
      </div>
      @if(session()->has('message'))
        <div class="row">
          <div style="background-color:#D4EDDA!important;color:green!important;"  class="alert alert-success text-center">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
              &times;</button>

              {{session()->get('message')}}
          </div>
        </div>
      @endif
      <br><br><br>
    </div>
@stop
@push('css')

@push('js')
