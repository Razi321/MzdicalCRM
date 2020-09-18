<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services =Service::orderBy('created_at','desc')->paginate(10);

        return view('services.index')->with('services', $services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.create');
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
            'prix' => 'required' ,
            'duration' => 'required' ,
            'description' => 'required' ,

        ]);

        //create user
        $service = new service;
        $service ->name =$request->input('name');
        $service ->prix =$request->input('prix');
        $service ->duration =$request->input('duration');
        $service ->description =$request->input('description');

        $service->save();
        return redirect('/services')->with('success',' service bien ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service =  Service::find($id);
        return view('services.show')->with('service', $service);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service =  Service::find($id);
        return view('services.edit')->with('service', $service);
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
            'prix' => 'required' ,
            'duration' => 'required' ,
            'description' => 'required' ,



        ]);

        $service = Service::find($id);







        $service ->name =$request->input('name');
        $service ->prix =$request->input('prix');
        $service ->duration =$request->input('duration');
        $service ->description =$request->input('description');

        $service->save();
                return redirect('/services')->with('success','  modification avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
            return redirect('/services')->with('success','le service a été supprimé');


    }
}
