@extends('layouts.app')
@section('content')

<div id="vizija" class="container-fluid"><br><br>
  <h2 class="text-center dim">Restoran Elite - Vizija</h2><hr>
<br>
<p><cite class="dim"><b>-Opis problema:</b></cite>&nbsp Restorani ne mogu sa svojim dnevnim menijem odgovarati svakome svaki dan, niti im gosti mogu znati ima li u određenom trenutku mjesta u restoranu.<br>
<cite class="dim"><b>-Doseg problema:</b></cite>&nbsp Restoran bi mogao bolje raditi kada bi potencijalni gosti točno znali kada je koje mjesto slobodno i što je na meniju taj dan.<br>
<cite class="dim"><b>-Posljedica problema:</b></cite>&nbsp Problem utječe na poslovanje restorana.<br>
<cite class="dim"><b>-Rješenje:</b></cite>&nbsp Potencijalni gosti mogu vidjeti što je na meniju, te sukladno s tim napraviti rezervaciju kada im odgovara.<br>
<cite class="dim"><b>-Namjena sustava:</b></cite>&nbsp Sustav je namijenjen za restorane koji žele unaprijediti svoje poslovanje direktnom komunikacijom sa potencijalnim gostima.<br>
<cite class="dim"><b>-Naziv produkta:</b></cite>&nbsp Web aplikacija za pregled menija i rezervacije.<br>
<cite class="dim"><b>-Prednosti korištenja sustava:</b></cite>&nbsp Sustav omogućava ugostitelju da dopre lakše do potencijalnih gostiju i da sazna njihove želje te da radi u skladu s njima.
 Omogućava mu bolju organizaciju posla, izbjegavanje gužvi i lakše promoviranje vlastite ponude.
  Gostu omogućava da vidi što je na meniju bez da mora doći u restoran, lako pravljenje rezervacije.</p>
<br>
<h4 class="dim"><b>GOST</b></h4>
<p>Opis: Koristi aplikaciju da čita podatke i da pruži korisne informacije za adekvatan rad restoranskih usluga.
Odgovornosti: Smije čitati osnovne informacije koje pruža administrator i pružati vlastite informacije koje služe administratoru pri vršenju svojih usluga.
</p><br>
<h4 class="dim"><b>ADMINISTRATOR</b></h4>
<p>Opis: Koristi aplikaciju kao davatelj osnovnih informacija o uslugama i ima uvid u informacije koje pružaju gosti.
Odgovornosti: Smije čitati sve informacije u bazi i mijenjati informacije koje sam pruža.</p><br><br>

<cite class="dim">Rade na projektu: Ivan Miloš, Luka Marić, Ivan Martinović, Marko Baškarad.</cite><br><br><br>
</div>

@include('inc.footer')
@endsection
