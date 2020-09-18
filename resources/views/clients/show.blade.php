@extends('layouts.clients')
@section('content')
<!-- Page Content -->
<div class="container">
    <!-- Portfolio Item Heading -->
    <h1 class="my-4">{{$client->name}}
    </h1>
    <!-- Portfolio Item Row -->
    <div class="row">
      <div class="col-md-8">
        <img class="img-fluid" src="/storage/cover_images/{{$client->cover_image}}"  alt="">
      </div>
      <div class="col-md-4">
        <h3 class="my-3">A propos</h3>
        <h3 class="my-3"></h3>
        <ul>
          <li><span style="color:#f4511e" class="	fa fa-map-marker"></span> {{$client->adress}}</li>
          <li><span style="color:#f4511e" class="fa fa-phone"></span> {{$client->phone}}</li>
          <li><span style="color:#f4511e" class="fa fa-phone"></span> {{$client->sexe}}</li>
          <li><span style="color:#f4511e" class="fa fa-phone"></span> {{$client->email}}</li>

        </ul>
      </div>
    </div>
    {!!Form::open(['action'=>['ClientsController@destroy' , $client->id] , 'method' =>'POST' ,'enctype' => 'multipart/form-data'])!!}

    {{Form::hidden('_method' , 'DELETE')}}
    {{Form::submit('Supprimer' , ['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}

<br/>


    <a href="/clients/{{$client->id}}/edit" class="btn btn-dark btn-sm btn-block">Modifier </a>
@endsection
@section('scripts')


@endsection
