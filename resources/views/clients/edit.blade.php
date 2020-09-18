@extends('layouts.clients')
@section('content')
<h1> Modifier le client</h1>
{!! Form::open(['action' => ['ClientsController@update' , $client->id] , 'method' => ' Post','enctype' => 'multipart/form-data']) !!}
<div class ='form-group'>
        {{Form::label('name' , 'Nom *')}}
        {{Form::text('name' , $client->name, ['class' => 'form-control'] )}}
    </div>

    <div class ='form-group'>
        {{Form::label('adress' , 'Adresse *')}}
        {{Form::text('adress' , $client->adress, ['class' => 'form-control'] )}}
    </div>
    <div class ='form-group'>
        {{Form::label('sexe' , 'Sexe *')}}
    {{Form::select('sexe', ['homme' => 'homme', 'femme' => 'femme'], $client->sexe, ['placeholder' => 'choisir ici' , 'class' => 'form-control'])}}
    </div>
    <div class ='form-group'>
        {{Form::label('phone' , 'Téléphone *')}}
        {{Form::text('phone' , $client->phone, ['class' => 'form-control'] )}}
    </div>


    <div class ='form-group'>
       {{Form::label('email' , 'Adresse email ')}}
        {{ Form::text('email' , $client->email, ['class' => 'form-control'])}}
    </div>



    <p>* obligatoire</p>

    {{Form::hidden('_method' , 'PUT')}}
            {{Form::submit('Enregistrer' , ['class'=> 'btn btn-success'])}}
            {!! Form::close() !!}


@endsection
@section('scripts')


@endsection
