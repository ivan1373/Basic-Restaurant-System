<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meni;

class MeniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      /*  return Meni::create([
          'naziv' => $data['naziv'],
          'cijena' => $data['cijena'],
          'sastojci' => $data['sastojci']
        ]);*/
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
        $meni = new Meni;

        $this->validate(request(),[

            'naziv' => 'required',
            'cijena' => 'required'
        ]);

        $meni->naziv = $request->get('naziv');
        $meni->cijena = $request->get('cijena');
        $meni->sastojci = $request->get('sastojci');
        $meni->link_slike = $request->get('link');

        $meni->save();

        session()->flash('spremanje','Jelo uspješno spremljeno!');



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
        $meni = Meni::findOrFail($id);
        return view('admin.urediMeni',compact('meni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate(request(),[

            'noviNaziv' => 'required',
            'novaCijena' => 'required',
            'noviSastojci' => 'required',
            'noviLink'  => 'required'
        ]);

        $meni = Meni::findOrFail($id);




        $meni->naziv = $request->get('noviNaziv');
        $meni->cijena = $request->get('novaCijena');
        $meni->sastojci = $request->get('noviSastojci');
        $meni->link_slike = $request->get('noviLink');

        $meni->save();
        session()->flash('message','Uspješna izmjena podataka!');
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
        $row = Meni::findOrFail($id);
        $row->delete();

        return back();
    }
}
