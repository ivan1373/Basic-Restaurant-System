@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>UREDI KORISNIKA!</h1>
@stop

@section('content')
<br>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>TRENUTNI PODACI:</h3>
          <ul class="list-group">
            <li class="list-group-item">
              <b>Ime:</b>
            </li>
            <li class="list-group-item">
              <b>Ime:</b>
            </li>
            <li class="list-group-item">
              <b>Ime:</b>
            </li>
            <li class="list-group-item">
              <b>Ime:</b>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h3>PROMIJENITE PODATKE</h3>
          <form>
            <div class="form-group">
              <input type="text" value="Ime...">
            </div><br>
            <div class="form-group">
              <input type="text" value="Ime...">
            </div><br>
            <div class="form-group">
              <input type="text" value="Ime...">
            </div><br>
            <div class="form-group">
              <input type="text" value="Ime...">
            </div><br>
          </form>
        </div>
      </div>
    </div>
@stop
@push('css')

@push('js')
