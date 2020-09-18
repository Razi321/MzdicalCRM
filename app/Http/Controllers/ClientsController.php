<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients =Client::orderBy('created_at','desc')->paginate(10);

        return view('clients.index')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request ,[
            'name' => 'required' ,
            'adress' => 'required' ,
            'phone' => 'required' ,
            'sexe' => 'required' ,

        ]);

        //create user
        $client = new client;
        $client ->name =$request->input('name');
        $client ->email =$request->input('email');
        $client ->adress =$request->input('adress');
        $client ->phone =$request->input('phone');
        $client ->sexe =$request->input('sexe');
        $client->save();
        return redirect('/clients')->with('success',' client bien ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        return view('clients.show')->with('client',$client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit')->with('client',$client);
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
        $this -> validate($request ,[
            'name' => 'required' ,
            'adress' => 'required' ,
            'phone' => 'required' ,
            'sexe' => 'required' ,



        ]);

        $client = Client::find($id);







        $client ->name =$request->input('name');
        $client ->email =$request->input('email');
        $client ->adress =$request->input('adress');
        $client ->phone =$request->input('phone');
        $client ->sexe =$request->input('sexe');
        $client->save();
                return redirect('/clients')->with('success','  modification avec succès');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
            return redirect('/clients')->with('success','Client a été supprimé');


    }
}
