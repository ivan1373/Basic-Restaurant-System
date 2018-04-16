<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
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
        $user = User::findOrFail($id);
        return view('admin.urediUser',compact('user'));
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

            'novoIme' => 'required',
            'noviMail' => 'required'
        ]);

        $user = User::findOrFail($id);



        $admin = $request->get('vrsta');
        if($admin == "Administrator")
        {
          $user->admin = '1';
        }
        else  {
          $user->admin = '0';
        }
          $user->name = $request->get('novoIme');

          $user->email = $request->get('noviMail');


          $user->password = bcrypt($request->get('novaLozinka'));
          $user->save();
          session()->flash('message','Uspješna izmjena podataka!');
          return back();


      /*  $admin = request('vrsta');
        $user->name = request('novoIme');
        if($admin == "Administrator")
        {
          $user->admin = 1;
        }
        else  {
          $user->admin = 0;
        }
        $user->mail = request('noviMail');


        $user->password = request('novaLozinka');

      //  $user->update($request->all());
        $user->save();

    *///    return back();

    }

    public function updateAdmin(Request $request, $id)
    {
        //
        $this->validate(request(),[

            'novoIme' => 'required',
            'noviMail' => 'required'
        ]);

        $user = User::findOrFail($id);


        $user->name = $request->get('novoIme');
        $user->admin = '1';
        $user->email = $request->get('noviMail');
        $user->password = bcrypt($request->get('novaLozinka'));

        $user->save();

        session()->flash('message','Uspješna izmjena podataka!');

        return back();

    }

    public function updateUser(Request $request, $id)
    {
        //
        $this->validate(request(),[

            'novoIme' => 'required',
            'noviMail' => 'required'
        ]);

        $user = User::findOrFail($id);


        $user->name = $request->get('novoIme');
        $user->admin = '0';
        $user->email = $request->get('noviMail');
        $user->password = bcrypt($request->get('novaLozinka'));

        $user->save();

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
        $row = User::findOrFail($id);
        $row->delete();

        return back();
    }
}
