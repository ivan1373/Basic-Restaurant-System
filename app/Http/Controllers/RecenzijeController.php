<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recenzija;
use Auth;



class RecenzijeController extends Controller
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
          return view('stranice.create_rec');

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

        $rec = new recenzija;

        $this->validate(request(),[

            'title' => 'required',
            'body' => 'required'
        ]);

        $rec->title = $request->get('title');
        $rec->body = $request->get('body');
        $rec->user_id =  Auth::user()->id;
      //  $meni->link_slike = $request->get('link');
        session()->flash('rec','Vaša recenzija je pohranjena!');
        $rec->save();




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
      /*  $row = Meni::findOrFail($id);
        $row->delete();

        return back();*/
    }
}
