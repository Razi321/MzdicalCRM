@extends('layouts.clients')
@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12" >
        <a href="/clients/create" class="btn btn-primary">Ajouter un client</a>
      </div>
    </div>
  </div>


@if (count($clients)> 0 )
@foreach ($clients as $client)



<div class ='card p-3 mt-3 mb-3'>

    <div class="row">
        <div class="col-md-4 col-sm-4">
            <img style="width:100% " src="{{$client->cover_image}}">
        </div>
        <div class="col-md-8 col-sm-8">

                <h2 >   <a href="/clients/{{$client->id}}"> {{$client->name}} </a></h2>
                <small><span class="txt_bold"> ajouté le</span> : {{$client->created_at}} </small> <br>
                <small><span class="txt_bold"> sexe</span> : {{$client->sexe}} </small> <br>
                <small><span class="txt_bold"> adresse</span> : {{$client->adress}} </small> <br>
                <small> <span  class="txt_bold"> Adresse email :</span>  {{$client->email}} </small><br>
                <small> <span class="txt_bold"> téléphone :</span>  {{$client->phone}} </small>




        </div>
    </div>
 </div>




</div>

@endforeach
{{$clients->links()}}


@else
<p>aucun client</p>
@endif




@endsection






@section('scripts')
@endsection
