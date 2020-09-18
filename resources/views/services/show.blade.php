

@extends('layouts.services')
@section('content')

<div class="container">

    <table class="table table-bordered ">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prix</th>
            <th>durée</th>
            <th>description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$service->name}}</td>
            <td>{{$service->prix}}</td>
            <td>{{$service->duration}}</td>
            <td>{{$service->description}}</td>
          </tr>

        </tbody>
      </table>


  </div>

  {!!Form::open(['action'=>['ServicesController@destroy' , $service->id] , 'method' =>'POST' ,'enctype' => 'multipart/form-data'])!!}

  {{Form::hidden('_method' , 'DELETE')}}
  {{Form::submit('Supprimer' , ['class'=>'btn btn-danger'])}}
  {!!Form::close()!!}

@endsection
@section('scripts')


@endsection




