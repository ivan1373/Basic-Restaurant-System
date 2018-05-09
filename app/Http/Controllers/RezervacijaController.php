<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rezervacija;
use Auth;

class RezervacijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        return view('stranice.rezervacija');

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rezervacija = new Rezervacija;

        $this->validate(request(),[

            'ime_prezime' => 'required',
            'telefon' => 'required',
            'gosti' => 'required',
            'datum' => 'required',

        ]);

        $rezervacija->ime_prezime = $request->get('ime_prezime');
        $rezervacija->gosti = $request->get('gosti');
        $rezervacija->datum = $request->get('datum');
        $rezervacija->br_telefona = $request->get('telefon');
        $rezervacija->user_id =  Auth::user()->id;

        $rezervacija->save();

        session()->flash('rez','Rezervacija spremljena! Bit će te obaviješteni o mogućnosti rezervacije!');



        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        $row = Rezervacija::findOrFail($id);
        $row->odobrena = '1';
        $row->save();
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $row = Rezervacija::findOrFail($id);
        $row->delete();

        return back();

    }
}
