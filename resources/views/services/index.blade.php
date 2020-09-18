@extends('layouts.services')
@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12" >
        <a href="/services/create" class="btn btn-primary">Ajouter un service</a>
      </div>
    </div>
  </div>


@if (count($services)> 0 )
@foreach ($services as $service)



<div class ='card p-3 mt-3 mb-3'>

    <div class="row">
        <div class="col-md-8 col-sm-8">

                <h2 >   <a href="/services/{{$service->id}}"> {{$service->name}} </a></h2>
                <small><span class="txt_bold"> prix</span> : {{$service->prix}} </small> <br>
                <small><span class="txt_bold"> durée</span> : {{$service->duration}} </small> <br>
                <small> <span  class="txt_bold"> description </span> : {{$service->description}} </small><br>

                <small><span class="txt_bold"> ajouté le</span> : {{$service->created_at}} </small> <br>



        </div>
    </div>
 </div>




</div>

@endforeach
{{$services->links()}}


@else
<p>aucun service</p>
@endif




@endsection






@section('scripts')
@endsection
