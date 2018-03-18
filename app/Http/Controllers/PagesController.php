<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meni;
use App\recenzija;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('stranice.index');
    }

    public function meni()
    {
      $menis = Meni::all();
        return view('stranice.meni')->with('menis', $menis);
    }

    public function rezervacija()
    {
      return view('stranice.rezervacija');
    }

    public function vizija()
    {
      return view('stranice.vizija');
    }

    public function rec()
    {
      $recs = recenzija::all();
      return view('stranice.recenzije')->with('recs',$recs);

    }

    public function stvoriRec()
    {
      return view('stranice.create_rec');
    }
}
