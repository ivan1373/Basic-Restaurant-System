@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>UREDI KORISNIKA!</h1><br>
@stop

@section('content')
<br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <h3 class="text-center" style="font-style:italic;">TRENUTNI PODACI</h3><hr style="height: 12px;border: 0;box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Ime</b> &nbsp &nbsp<i class="fa fa-arrow-right"></i>&nbsp<cite>{{$user -> name}}</cite>
            </li><br>
            <li class="list-group-item">
              <b>E-mail Adresa</b> &nbsp &nbsp<i class="fa fa-arrow-right"></i>&nbsp<cite>{{$user -> email}}</cite>
            </li><br>
            <li class="list-group-item">
              <b>Vrsta Korisnika</b> &nbsp &nbsp<i class="fa fa-arrow-right"></i>&nbsp<cite>{{($user->admin)?'Administrator':'Registrirani Korisnik'}}</cite>
            </li><br>
            <li class="list-group-item">
              <b>Lozinka</b> &nbsp &nbsp<i class="fa fa-arrow-right"></i>&nbsp<cite>{{$user -> password}}</cite>
            </li>
          </ul>
        </div>
      </div><br><hr style="height: 12px;border: 0;box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);"><br>
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4 text-center" style="border:1px solid gray;border-radius:10px;">
          <h3 style="font-style:italic;">PROMIJENITE PODATKE</h3><hr style="height: 12px;border: 0;box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">
          <form method="post" action="{{ url('/admin/pregled/urediUser') }}/{{$user->id}}">
            @csrf
            {{method_field('PUT')}}
            <div class="form-group">
              <input class="form-control" name="novoIme" type="text" placeholder="Novo Ime...">
            </div><br>
            <div class="form-group">
              <input class="form-control" name="noviMail" type="text" placeholder="Nova E-mail Adresa...">
            </div><br>
            <div class="form-group">
              <select name="vrsta" class="form-control" placeholder="vrsta korisnika">
                  <option disabled selected>Izaberite vrstu korisnika</option>
                  <option value="Registrirani">Registrirani Korisnik</option>
                  <option value="Administrator">Administrator</option>
              </select>
            </div><br>
            <div class="form-group">
              <input class="form-control" name="novaLozinka" type="text" placeholder="Nova Lozinka...">
            </div><br>
            <input type="submit" class="btn btn-success" value="POTVRDI">
          </form><br>
        </div>
      </div><br>
      @if(session()->has('message'))
        <div class="row">
          <div style="background-color:#D4EDDA!important;color:green!important;" class="alert alert-success text-center">
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
