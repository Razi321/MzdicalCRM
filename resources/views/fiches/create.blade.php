
<div class="container-fluid">
    <h2 class="">Ajouter une fiche </h2>
    {!!Form::open(['action' => 'FichesController@store' , 'method' => 'POST' ]) !!}

  <div class ='form-group'>
            {{Form::label('client_id' , "Identifiant du client")}}

            {{Form::text('client_id' , $client->id, ['class' => 'form-control' , 'placeholder' => 'name'])}}
        </div>



           <div class ='form-group'>
            {{Form::label('service_id' , 'Service')}}
            {{Form::select('service_id', ['2' => 'botox'], null, ['placeholder' => 'choisir ici' , 'class' => 'form-control'])}}
                </div>

   <div class ='form-group'>
    {{Form::label('payment_meth' , 'Mode du paiement')}}
    {{Form::select('payment_meth', ['cash' => 'en espèces', 'cheque' => 'cheque'], null, ['placeholder' => 'choisir ici' , 'class' => 'form-control'])}}
        </div>



    <div class ='form-group'>
       {{Form::label('validation' , "état du paimenet")}}
       {{Form::select('validation', ['oui' => 'validé', 'non' => 'non validé'], null, ['placeholder' => 'choisir ici' , 'class' => 'form-control'])}}
        </div>


  <div class ='form-group'>
    {{Form::label('description' , "description")}}

    {{Form::text('description' ,'', ['class' => 'form-control' ])}}
</div>



        {{Form::submit('Enregistrer' , ['class'=> 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div >






