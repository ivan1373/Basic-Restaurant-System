@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>PREGLED REZERVACIJA</h1><hr><br>

@stop

@section('content')
<div class="container-fluid bg-danger">


<table class="table table-hover">
<thead>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>John</td>
    <td>Doe</td>
    <td>john@example.com</td>
  </tr>
  <tr>
    <td>Mary</td>
    <td>Moe</td>
    <td>mary@example.com</td>
  </tr>
  <tr>
    <td>July</td>
    <td>Dooley</td>
    <td>july@example.com</td>
  </tr>
</tbody>
</table>
</div>

@stop
@push('css')

@push('js')
