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
        $menis = Meni::all();
          return view('stranice.meni')->with('menis', $menis);
    }

    public function zbrojiMeni()
    {
      
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

        $naziv = request('naziv');
        $cijena = request('cijena');
        $sastojci = request('sastojci');
        $link = request('link');

        $meni->save();


         Session::flash('flash_message', 'Post uspješno objavljen!');

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
    public function update(Request $request, $id)
    {
        //
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
    }
}
