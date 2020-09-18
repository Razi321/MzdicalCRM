@extends('layouts.services')
@section('content')
<h1>Ajouter un service</h1>
    {!!Form::open(['action' => 'ServicesController@store' , 'method' => 'POST' ]) !!}

    <div class ='form-group'>
        {{Form::label('name' , 'Nom*')}}
        {{Form::text('name' , '', ['class' => 'form-control'] )}}
    </div>

<div class ='form-group'>
        {{Form::label('prix' , 'Prix*')}}
        {{Form::text('prix' , '', ['class' => 'form-control'] )}}
    </div>

    <div class ='form-group'>
        {{Form::label('duration' , 'Durée *')}}
        {{Form::text('duration' , '', ['class' => 'form-control'] )}}
    </div>

    <div class ='form-group'>
        {{Form::label('description' , 'Description *')}}
        {{Form::text('description' , '', ['class' => 'form-control'] )}}
    </div>

    <p>* obligatoire</p>

    {{Form::submit('enregistrer' , ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection
@section('scripts')


@endsection
