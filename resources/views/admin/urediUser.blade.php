@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>UREDI KORISNIKA!</h1><br>
@stop

@section('content')
<br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4" style="border:1px solid gray;border-radius:10px;">
          <h3 class="text-center" style="font-style:italic;">TRENUTNI PODACI</h3><hr style="height: 12px;border: 0;box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Ime</b> &nbsp &nbsp<i class="fa fa-arrow-right"></i>
            </li><br>
            <li class="list-group-item">
              <b>E-mail Adresa</b> &nbsp &nbsp<i class="fa fa-arrow-right"></i>
            </li><br>
            <li class="list-group-item">
              <b>Vrsta Korisnika</b> &nbsp &nbsp<i class="fa fa-arrow-right"></i>
            </li><br>
            <li class="list-group-item">
              <b>Lozinka</b> &nbsp &nbsp<i class="fa fa-arrow-right"></i>
            </li>
          </ul>
        </div>
      </div><br><hr style="height: 12px;border: 0;box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);"><br>
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4 text-center" style="border:1px solid gray;border-radius:10px;">
          <h3 style="font-style:italic;">PROMIJENITE PODATKE</h3><hr style="height: 12px;border: 0;box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">
          <form>
            <div class="form-group">
              <input class="form-control" name="novoIme" type="text" placeholder="Novo Ime...">
            </div><br>
            <div class="form-group">
              <input class="form-control" name="noviMail" type="text" placeholder="Nova E-mail Adresa...">
            </div><br>
            <div class="form-group">
              <input class="form-control" name="novaVrsta" type="text" placeholder="Nova Vrsta Korisnika...">
            </div><br>
            <div class="form-group">
              <input class="form-control" name="novaLozinka" type="text" placeholder="Nova Lozinka...">
            </div><br>
            <input type="submit" class="btn btn-success" value="POTVRDI">
          </form><br>
        </div>
      </div>
      <br><br><br>
    </div>
@stop
@push('css')

@push('js')
