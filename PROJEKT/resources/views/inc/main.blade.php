<div id="tehnologije" class="container text-center" style="padding-top:28px;padding-bottom:20px;">
  <h2>Korištene Tehnologije</h2>
  <button class="btn btn-warning btn-xs grow" @click="show = !show"><cite>UKLONI!</cite></button>
  <hr><br>
  <transition
   name="custom-classes-transition"
   enter-active-class="animated tada"
   leave-active-class="animated bounceOutRight"
   >
  <div v-if="show" class="row well">

    <div class="grow col-sm-6" ><br>
      <h3><i>FRONTEND</i></h3><hr><br>
      <ul class="list-group" style="list-style-type:none;font-family: 'Open Sans Condensed', sans-serif;">
        <li class="list-group-item">
          <h4 class="bg-animate hover-bg-light-purple"><i class="devicon-html5-plain-wordmark colored"></i><b> HTML5</b> -- osnovna struktura</h4>
        </li>
        <li class="list-group-item">
          <h4 class="bg-animate hover-bg-light-purple"><i class="devicon-css3-plain-wordmark colored"></i><b> CSS3</b> -- osnovna stilizacija i uređivanje</h4>
        </li>
        <li class="list-group-item">
          <h4 class="bg-animate hover-bg-light-purple"><i class="devicon-bootstrap-plain-wordmark colored"></i><b> BOOSTRAP 4</b> -- napredna stilizacija i uređivanje</h4>
        </li>
        <li class="list-group-item">
          <h4 class="bg-animate hover-bg-light-purple"><i class="devicon-javascript-plain colored"></i><b> JAVASCRIPT</b> -- smooth scroll</h4>
        </li>
        <li class="list-group-item">
          <h4 class="bg-animate hover-bg-light-purple"><i class="devicon-jquery-plain-wordmark colored"></i><b> JQUERY</b> -- efekti i animacije ...</h4>
        </li>
        <li class="list-group-item">
          <h4 class="bg-animate hover-bg-light-purple"><i class="devicon-vuejs-plain-wordmark colored"></i><b> VUE</b> -- dodatni efekti</h4>
        </li>
        <li class="list-group-item">
          <h4 class="bg-animate hover-bg-light-purple"><b> TACHYONS</b> -- hover animacije na stranici</h4>
        </li>

      </ul>
    </div>
    <div class="grow col-sm-6"><br>
      <h3><i>BACKEND</i></h3><hr><br>
      <ul style="list-style-type:none;font-family: 'Open Sans Condensed', sans-serif;">
        <li class="list-group-item">
          <h4 class="bg-animate hover-bg-light-purple"><i class="devicon-laravel-plain-wordmark colored"></i><b> LARAVEL</b> -- framework PHP-a</h4>
        </li>
        <li class="list-group-item">
          <h4 class="bg-animate hover-bg-light-purple"><i class="devicon-mysql-plain-wordmark colored"></i><b> MYSQL</b> -- baza podataka</h4>
        </li>

      </ul>
    </div>
  </div>
</transition>
</div>
<div id="testni" class="container text-center" style="padding-top:28px;padding-bottom:20px;">
  <h2>Testni Podaci</h2><hr><br>
  <div class="row well">
    <div class="grow col-sm-6">
      <h3>LOGIRANI KORISNIK</h3><hr><br>
        <ul style="list-style-type:none;font-family: 'Open Sans Condensed', sans-serif;">
        </ul>
    </div>
    <div class="grow col-sm-6">
      <h3>ADMINISTRATOR</h3><hr><br>
      <ul style="list-style-type:none;font-family: 'Open Sans Condensed', sans-serif;">
      </ul>
    </div>
  </div>
</div>
<div id="uvod" class="text-center container-fluid">
  			<h2>DOBRODOŠLI!</h2><hr><br>
  			<div class="row slideanim">
    			<div class="col-sm-4 grow">
      				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque convallis sapien, et pellentesque sem aliquam sit amet. Nunc vitae tellus facilisis, placerat quam eu, aliquet orci. Donec in lobortis elit. Aliquam erat volutpat. Vivamus semper rutrum bibendum. Ut vitae fringilla turpis, at consectetur tortor. Quisque pretium et arcu non volutpat.</p>
      			<img src="./images/ikona1.svg" class="img-responsive margin grow" style="width:35%" alt="Image">
    			</div>
    		<div class="col-sm-4 grow">
      			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque convallis sapien, et pellentesque sem aliquam sit amet. Nunc vitae tellus facilisis, placerat quam eu, aliquet orci. Donec in lobortis elit. Aliquam erat volutpat. Vivamus semper rutrum bibendum. Ut vitae fringilla turpis, at consectetur tortor. Quisque pretium et arcu non volutpat.</p>
      			<img src="./images/ikona2.svg" class="img-responsive margin grow" style="width:35%" alt="Image">
    		</div>
    		<div class="col-sm-4 grow">
      			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque convallis sapien, et pellentesque sem aliquam sit amet. Nunc vitae tellus facilisis, placerat quam eu, aliquet orci. Donec in lobortis elit. Aliquam erat volutpat. Vivamus semper rutrum bibendum. Ut vitae fringilla turpis, at consectetur tortor. Quisque pretium et arcu non volutpat.</p>
      			<img src="./images/ikona3.svg" class="img-responsive margin grow" style="width:35%" alt="Image">
    		</div>
  			</div>
		</div>
		<div id="o-nama" class="container-fluid text-center">
			<h2>O nama</h2><hr><br>
			<div class="row slideanim">
				<div class="col-sm-6">
					<img src="./images/ikona.png" class="img-responsive" alt="Image" style="width:50%">
				</div>
				<div class="col-sm-6 grow">
					<br><br><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque convallis sapien, et pellentesque sem aliquam sit amet. Nunc vitae tellus facilisis, placerat quam eu, aliquet orci. Donec in lobortis elit. Aliquam erat volutpat. Vivamus semper rutrum bibendum. Ut vitae fringilla turpis, at consectetur tortor. Quisque pretium et arcu non volutpat.</p><br><br><br>
					<div id="soc-mreze">
						<i class="fa fa-facebook fa-lg" aria-hidden="true"></i>&nbsp &nbsp<i class="fa fa-twitter fa-lg" aria-hidden="true"></i>&nbsp &nbsp<i class="fa fa-google-plus fa-lg" aria-hidden="true"></i>
					</div>
				</div>
			</div>
		</div>

		<div id="kontakt" class="container-fluid text-center">
			<h2>Kontaktirajte nas</h2><hr><br>
			<div class="row slideanim">
				<div class="col-sm-6">
					<form>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="ime i prezime" required><br>
							<input type="email" class="form-control" placeholder="email"><br>
							<textarea class="form-control" rows="5" placeholder="poruka"></textarea><br>
							<button type="button" class="btn btn-primary">Pošalji</button>
						</div>
					</form>
				</div>
				<div class="col-sm-6">
					<h3>RADNO VRIJEME:</h3><br>
					<i class="fa fa-calendar fa-lg" aria-hidden="true"></i><h4>PON-SUB:</h4>
					<i class="fa fa-clock-o fa-lg" aria-hidden="true"></i><h4>08:00 -- 23:00</h4> <br><br>
					<i class="fa fa-phone fa-lg" aria-hidden="true"></i><h4>+38763111222</h4>
					<i class="fa fa-envelope fa-lg" aria-hidden="true"></i><h4>restoran.elite@mail.com</h4>
				</div>
			</div>
		</div>
    <div class="container-fluid" id="lokacija" style="margin-bottom:35px;margin-top:35px;">
      <div class="row slideanim">
        <div class="col-sm-6 text-center" style="padding-top:125px;">
          <h2>Naša lokacija --></h2><hr>
        </div>
        <div class="col-sm-6">
          <div id="map" class="thumbnail" style="width:100%;height:400px;"></div>
        </div>
      </div>
    </div>
