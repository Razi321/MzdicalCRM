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
        <img class="img-fluid" src="{{$user->cover_image}}"  alt="">
      </div>
      <div class="col-md-4">
        <h3 class="my-3">A propos</h3>
        <h3 class="my-3"></h3>
        <ul>
          <li><span style="color:#f4511e" class="	fa "></span> role ici </li>
          <li><span style="color:#f4511e" class="fa "></span> {{$user->phone}}</li>
        </ul>
      </div>
    </div>
    {!!Form::open(['action'=>['AdminsController@destroy' , $user->id] , 'method' =>'POST' ,'enctype' => 'multipart/form-data'])!!}

    {{Form::hidden('_method' , 'DELETE')}}
    {{Form::submit('Supprimer' , ['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}

<br/>



@endsection
@section('scripts')


@endsection
