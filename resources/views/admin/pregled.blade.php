@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>PREGLED REGISTRIRANIH KORISNIKA</h1><br><br><br>

@stop

@section('content')
<div class="container-fluid" style="background-color:#dddddd;border-top:2px solid darkgray;border-right:2px solid darkgray;border-radius:15px;">
<div class="table-responsive">
<table class="table table-bordered table-striped table-responsive">
<thead class="thead-dark">
<tr>
  <th class="text-center">#</th>
  <th class="text-center">Ime</th>
  <th class="text-center">E-mail</th>
  <th class="text-center">Lozinka</th>
  <th class="text-center">Tip korisnika</th>
  <th class="text-center">Radnja</th>
</tr>
</thead>
<tbody>
@foreach($users as $user)
<tr>
  <td class="text-center">{{$user->id}}</td>
  <td class="text-center">{{$user->name}}</td>
  <td class="text-center">{{$user->email}}</td>
  <td class="text-center">{{$user->password}}</td>
  <td class="text-center">{{($user->admin)?'Administrator':'Registrirani Korisnik'}}</td>
  <td class="text-center"><a class="btn btn-success" href="{{ url('/admin/pregled/urediUser/')}}/{{ $user->id }}" role="button">UREDI!</a>&nbsp &nbsp
    <a class="btn btn-danger" href="{{ url('/admin/pregled/brisi/')}}/{{ $user->id }}" role="button">IZBRIŠI!</a>
  </td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>

@stop
@push('css')

@push('js')
