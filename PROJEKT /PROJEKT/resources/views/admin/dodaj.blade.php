@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dodavanje hrane u meni</h1><br>
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
                                    <form method="post">
                                      @csrf
                                        <div class="form-group">
                                            <label>Naziv jela</label>
                                            <input class="form-control" name="naziv">
                                        </div>
                                        <div class="form-group">
                                          <label>Cijena</label>
                                          <input class="form-control" name="cijena">
                                        </div>
                                        <div class="form-group">
                                          <label>Sastojci</label>
                                          <input class="form-control" name="sastojci">
                                        </div>
                                        <div class="form-group">
                                            <label>Link za sliku</label>
                                            <input class="form-control" name="link">
                                        </div>


                                        <button type="submit" class="btn btn-info">Spremi</button>&nbsp
                                        <button type="reset" class="btn btn-danger">Poništi</button>
                                    </form>
                                </div>
                                <div class="col-lg-6">

                                </div>
                                <!-- /.col-lg-6 (nested) -->

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
