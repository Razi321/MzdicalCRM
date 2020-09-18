@extends('layouts.master')
@section('content')
<!-- Page Content -->
<div class="container">
    <!-- Portfolio Item Heading -->
    <h1 class="my-4">{{$user->name}}
    </h1>
    <!-- Portfolio Item Row -->
    <div class="row">
      <div class="col-md-8">
        <img class="img-fluid" src="/storage/cover_images/{{$user->cover_image}}"  alt="">
      </div>
      <div class="col-md-4">
        <h3 class="my-3">A propos</h3>
        <h3 class="my-3"></h3>
        <ul>
          <li><span style="color:#f4511e" class="	fa fa-map-marker"></span> role here</li>
          <li><span style="color:#f4511e" class="fa fa-phone"></span> {{$user->phone}}</li>
        </ul>
      </div>
    </div>
    {!!Form::open(['action'=>['AdminsController@destroy' , $user->id] , 'method' =>'POST' ,'enctype' => 'multipart/form-data'])!!}

    {{Form::hidden('_method' , 'DELETE')}}
    {{Form::submit('Supprimer' , ['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}

<br/>


    <a href="/admins/{{$user->id}}/edit" class="btn btn-dark btn-sm btn-block">Modifier </a>
@endsection
@section('scripts')


@endsection
