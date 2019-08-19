@extends('layouts.app')
@section('content')
  <a href="/clients">
            <button type="button" class="btn btn-default" aria-label="Back">Retour</button>
        </a>
        <fieldset>
  <legend>Editer le client N° <strong>{{$client->id}}</strong></legend>
    {!! Form::open(['action' => ['ClientsController@update', $client->id]]) !!}
        <div class="form-group">
            {{ Form::label('nom', 'Nom') }}
            {{ Form::text('nom',$client->nom,['class'=>'form-control', 'placeholder'=>'Saisir le nom ici']) }}
        </div>
        <div class="form-group">
            {{ Form::label('prenom', 'Prénom') }}
            {{ Form::text('prenom',$client->prenom,['class'=>'form-control', 'placeholder'=>'Saisir le prénom ici']) }}
        </div>
        <label for=""></label>
        <div class="form-group">
            {{ Form::label('dateN', 'Date de naissance') }}
            {{ Form::date('dateN',$client->dateNaissance,['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('adresse', 'Adresse') }}
            {{ Form::text('adresse',$client->adresse,['class'=>'form-control', 'placeholder'=>'Saisir l\'adresse ici']) }}
        </div>
        <div class="form-group">
            {{ Form::label('tel', 'Téléphone') }}
            {{ Form::text('tel',$client->tel,['class'=>'form-control', 'placeholder'=>'(+216)']) }}
        </div>
        {{Form::hidden('_method','PUT')}}
        <div class="form-group pull-right">
            {{ Form::submit('Mettre à jour',['class'=>'btn btn-success']) }}
        </div>
    {!! Form::close() !!}
</fieldset>
@endsection
