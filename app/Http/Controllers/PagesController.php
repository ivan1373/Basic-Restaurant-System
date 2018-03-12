<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
