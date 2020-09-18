@extends('layouts.clients')
@section('content')
<h1>Ajouter un client</h1>
    {!!Form::open(['action' => 'ClientsController@store' , 'method' => 'POST' ]) !!}
<div class ='form-group'>
        {{Form::label('name' , 'Nom *')}}
        {{Form::text('name' , '', ['class' => 'form-control'] )}}
    </div>

    <div class ='form-group'>
        {{Form::label('adress' , 'Adresse *')}}
        {{Form::text('adress' , '', ['class' => 'form-control'] )}}
    </div>
    <div class ='form-group'>
        {{Form::label('sexe' , 'Sexe *')}}
    {{Form::select('sexe', ['homme' => 'homme', 'femme' => 'femme'], null, ['placeholder' => 'choisir ici' , 'class' => 'form-control'])}}
    </div>
    <div class ='form-group'>
        {{Form::label('phone' , 'Téléphone *')}}
        {{Form::text('phone' , '', ['class' => 'form-control'] )}}
    </div>


    <div class ='form-group'>
       {{Form::label('email' , 'Adresse email ')}}
        {{ Form::text('email' , '', ['class' => 'form-control'])}}
    </div>



    <p>* obligatoire</p>

    {{Form::submit('enregistrer' , ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection
@section('scripts')


@endsection
