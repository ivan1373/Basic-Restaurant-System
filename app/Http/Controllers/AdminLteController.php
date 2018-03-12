<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meni;
use App\User;

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

      return view('admin.dashboard', compact('menisbr', 'usernm'));
    }

    public function admindodaj()
    {
      return view('admin.dodaj');
    }

    public function adminPromKor()
    {
      return view('admin.urediUser');
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
      return view('admin.pregl_rez');
    }





}
