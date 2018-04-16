@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>PREGLED REGISTRIRANIH KORISNIKA</h1><br><br><br>

@stop

@section('content')
<div class="container-fluid" style="background-color:lightgreen;border-1px solid darkblue;border-radius:5px;">
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
  <td class="text-center"><a href="{{ url('/admin/pregled/urediUser')}}"><span class="label label-warning">UREDI</span></a>&nbsp &nbsp
    <button role="button" class="btn btn-danger">IZBRIŠI!</button>
  </td>
</tr>
@endforeach
</tbody>
</table>
</div>

@stop
@push('css')

@push('js')
