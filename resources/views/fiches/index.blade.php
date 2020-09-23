@extends('layouts.fiches')
@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12" >
      </div>
    </div>
  </div>


@if (count($fiches)> 0 )
@foreach ($fiches as $fiche)



<div class ='card p-3 mt-3 mb-3'>

    <div class="row">

        <div class="col-md-10 col-sm-10">

                <h2 >   <a href="/fiches/{{$fiche->id}}"> N° : {{$fiche->id}} </a></h2>
                <small><span class="txt_bold">Client </span> : {{$fiche->clients->name}}  </small> &nbsp; {{$fiche->clients->surname}}  <br>
                <small><span class="txt_bold"> téléphone</span> : {{$fiche->clients->phone}} </small> <br>
                <small><span class="txt_bold"> service</span> : {{$fiche->services->name}} </small> <br>
                <small><span class="txt_bold"> paiement</span> :
                    @if ($fiche->validation == "oui")

                                    <span style="color:green">validé</span>

                                    @else

                                    <span style="color:red">non validé</span>
                    @endif
                     </small> <br>




        </div>
    </div>
 </div>




</div>

@endforeach
{{$fiches->links()}}


@else
<p>aucun fiche</p>
@endif




@endsection






@section('scripts')
@endsection
