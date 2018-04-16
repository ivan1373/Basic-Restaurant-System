@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dobrodošli u Administraciju sustava!</h1>
@stop

@section('content')
<br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor sagittis quam, ut malesuada diam.
       Aliquam fermentum tortor at ante suscipit, ut efficitur risus ultrices. Aliquam tincidunt id nunc nec porta.
        Vivamus venenatis quam augue. Aliquam erat volutpat. Integer tortor dui, feugiat quis porttitor nec, pretium ac sapien.
         Proin vehicula rutrum viverra. Duis aliquet venenatis turpis, eget mattis elit aliquet at. Suspendisse aliquam faucibus nisl id varius.
          Etiam eget rutrum quam, in feugiat orci. Cras id malesuada massa. Duis in magna semper, viverra libero dignissim, tincidunt eros.</p><br><br><br>

      <div class="container">
        <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Datum</span><br>
              <span class="info-box-number text-center"><iframe src="http://free.timeanddate.com/clock/i64w40jv/n3278/tlba30/ftb/tt1/tw0/tm1" frameborder="0" width="85" height="18"></iframe>
</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-cutlery"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jela u Meniu</span><br>
              <span class="info-box-number text-center" style="color:#000000;">{{$menisbr}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Broj Rezervacija</span><br>
              <span class="info-box-number text-center" style="color:#000000;">{{$brrez}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Broj Korisnika</span><br>
              <span class="info-box-number text-center" style="color:#000000;">{{$usernm}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      </div>
@stop
@push('css')

@push('js')
