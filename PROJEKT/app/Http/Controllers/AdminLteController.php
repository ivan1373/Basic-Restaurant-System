<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meni;
use App\User;
use App\recenzija;
use App\Rezervacija;

class AdminLteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin()
    {
      $menisbr = Meni::count();
      $usernm = User::count();
      $brrez = Rezervacija::count();

      return view('admin.dashboard', compact('menisbr', 'brrez', 'usernm'));
    }

    public function admindodaj()
    {
      return view('admin.dodaj');
    }

    public function recenzije()
    {
      $recs = recenzija::all();
      return view('admin.recenzije')->with('recs',$recs);
    }



    public function adminpregled()
    {
      $users = User::all();
      return view('admin.pregled')->with('users',$users);
    }

    public function admininfo(){
      return view('admin.info');
    }

    public function adminpregledmeni()
    {
      $menis = Meni::all();
      return view('admin.pregl_meni')->with('menis',$menis);
    }

    public function adminrez()
    {
      $rezs = Rezervacija::all();
      return view('admin.pregl_rez')->with('rezs',$rezs);
    }





}
