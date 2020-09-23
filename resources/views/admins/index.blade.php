@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12" >
        <a href="/admins/create" class="btn btn-primary">Ajouter un administrateur</a>
      </div>
    </div>
  </div>


@if (count($users)> 0 )
@foreach ($users as $user)



<div class ='card p-3 mt-3 mb-3'>

    <div class="row">
        <div class="col-md-4 col-sm-4">
            <img style="width:100% " src="{{$user->cover_image}}">
        </div>
        <div class="col-md-8 col-sm-8">

                <h2 >   <a href="/admins/{{$user->id}}"> {{$user->name}} </a></h2>
                <small><span class="txt_bold"> ajouté le</span> : {{$user->created_at}} </small> <br>
                <small> <span  class="txt_bold"> Adresse email :</span>  {{$user->email}} </small><br>
                <small> <span class="txt_bold"> téléphone :</span>  {{$user->phone}} </small>




        </div>
    </div>
 </div>




</div>

@endforeach
{{$users->links()}}


@else
<p>aucun admin</p>
@endif

@endsection

@section('scripts')


@endsection
