@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>INFORMACIJE O PRIJAVLJENOM ADMINISTRATORU</h1><br><br>
@stop

@section('content')
<div class="container">

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Ime</label>
                                            <input class="form-control" name="moje_ime" value="{{ Auth::user()->name }}">
                                        </div>
                                        <div class="form-group">
                                          <label>E-mail</label>
                                          <input class="form-control" name="moj_mail" value="{{ Auth::user()->email }}">
                                        </div>
                                        <div class="form-group">
                                          <label>Lozinka</label>
                                          <input class="form-control" name="moja_lozinka" value="{{ Auth::user()->password }}">
                                        </div>
                                      <button type="submit" class="btn btn-success">Spremi Izmjene</button>
                                        <!--<button type="reset" class="btn btn-danger">Poništi</button>-->
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                  <ul class="list-group"><br><br>
                                    <li class="list-group-item" style="background-color:blue;color:white;">
                                      <b>Ime: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>{{ Auth::user()->name }}
                                    </li><br>
                                    <li class="list-group-item" style="background-color:blue;color:white;">
                                      <b>Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>{{ Auth::user()->email }}
                                    </li><br>
                                    <li class="list-group-item" style="background-color:blue;color:white;">
                                      <b>Lozinka: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>{{ Auth::user()->password }}
                                    </li>
                                  </ul>
                                </div>

                                <!-- /.col-lg-6 (nested) -->
                            </div>

                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
@stop
@push('css')

@push('js')
