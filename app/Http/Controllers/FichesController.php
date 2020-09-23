<?php

namespace App\Http\Controllers;
use App\Models\Fiche;
use Illuminate\Http\Request;

class FichesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fiches =Fiche::orderBy('created_at','desc')->paginate(10);

        return view('fiches.index')->with('fiches', $fiches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fiches.create');
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
            'payment_meth' => 'required' ,
            'validation' => 'required' ,
            'description' => 'required' ,


        ]);

        //create user
        $fiche = new fiche;
        $fiche ->payment_meth =$request->input('payment_meth');
        $fiche ->validation =$request->input('validation');
        $fiche ->description =$request->input('description');
        $fiche ->client_id =$request->input('client_id');
        $fiche ->service_id =$request->input('service_id');
        $fiche->save();
        return back()->with('success',' fiche bien ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fiche = Fiche::find($id);
        return view('fiches.show')->with('fiche',$fiche);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fiche = Fiche::find($id);
        return view('fiches.edit')->with('fiche',$fiche);
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
        $fiche = Fiche::find($id);
        $fiche->delete();
            return redirect('/fiches')->with('success','la fiche a été supprimé');

    }
}
