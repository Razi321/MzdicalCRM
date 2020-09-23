

@extends('layouts.fiches')
@section('content')

<div class="container">

    <table class="table table-bordered ">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>N° téléphone</th>
            <th>Sexe</th>
            <th>Age</th>
            <th>date d'ajout du client</th>
            <th>Service</th>
            <th>Methode de paiement</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$fiche->clients->name}}</td>
            <td>{{$fiche->clients->surname}}</td>
            <td>{{$fiche->clients->phone}}</td>
            <td>{{$fiche->clients->sexe}}</td>
            <td>{{$fiche->clients->age}}</td>
            <td>{{$fiche->clients->created_at}}</td>
            <td>{{$fiche->services->name}}</td>
            <td>{{$fiche->payment_meth}}</td>
            <td>{{$fiche->description}}</td>
          </tr>

        </tbody>
      </table>


  </div>

  {!!Form::open(['action'=>['FichesController@destroy' , $fiche->id] , 'method' =>'POST' ,'enctype' => 'multipart/form-data'])!!}

  {{Form::hidden('_method' , 'DELETE')}}
  {{Form::submit('Supprimer' , ['class'=>'btn btn-danger'])}}
  {!!Form::close()!!}

@endsection
@section('scripts')


@endsection




