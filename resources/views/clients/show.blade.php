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
        <img class="img-fluid" src="{{$client->cover_image}}"  alt="">
      </div>
      <div class="col-md-4">
        <h3 class="my-3">A propos</h3>
        <h3 class="my-3"></h3>
        <ul>
          <li><span style="color:#f4511e" class="	fa "></span> {{$client->adress}}</li>
          <li><span style="color:#f4511e" class="fa "></span> {{$client->phone}}</li>
          <li><span style="color:#f4511e" class="fa "></span> {{$client->sexe}}</li>
          <li><span style="color:#f4511e" class="fa "></span> {{$client->email}}</li>

        </ul>
      </div>
    </div>
    {!!Form::open(['action'=>['ClientsController@destroy' , $client->id] , 'method' =>'POST' ,'enctype' => 'multipart/form-data'])!!}

    {{Form::hidden('_method' , 'DELETE')}}
    {{Form::submit('Supprimer' , ['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
    <hr/>
    <div class="container-fluid">
    <h2 >Historique </h2>
    @foreach ($client->fiches as $fiches)
    <p> <strong> Date de création du fiche </strong> : {{ $fiches->clients->created_at}}</p>
    <p> <strong> Nom du service </strong> : {{ $fiches->services->name}}</p>
    <p> <strong> Prix </strong> : {{ $fiches->services->prix}}</p>
    <p> <strong> Méthode de paiement</strong> : {{ $fiches->payment_meth}} </p>
    <p> <strong> Validation  </strong> : {{$fiches->validation}}</p>
    <p> <strong> Description </strong>: {{ $fiches->description}}</p>
    <hr class="dashed">
    @endforeach
 </div>
<hr/>
@include('fiches.create')

@endsection
@section('scripts')


@endsection
