@extends('layouts.app')
@section('content')
<fieldset>
  <legend>Nouveau client</legend>
    {!! Form::open(['action' => 'ClientsController@store', 'method' => 'post']) !!}
        <div class="form-group">
            {{ Form::label('nom', 'Nom') }}
            {{ Form::text('nom','',['class'=>'form-control', 'placeholder'=>'Saisir le nom ici']) }}
        </div>
        <div class="form-group">
            {{ Form::label('prenom', 'Prénom') }}
            {{ Form::text('prenom','',['class'=>'form-control', 'placeholder'=>'Saisir le prénom ici']) }}
        </div>
        <label for=""></label>
        <div class="form-group">
            {{ Form::label('dateN', 'Date de naissance') }}
            {{ Form::date('dateN','',['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('adresse', 'Adresse') }}
            {{ Form::text('adresse','',['class'=>'form-control', 'placeholder'=>'Saisir l\'adresse ici']) }}
        </div>
        <div class="form-group">
            {{ Form::label('tel', 'Téléphone') }}
            {{ Form::text('tel','',['class'=>'form-control', 'placeholder'=>'(+216)']) }}
        </div>
        <div class="form-group pull-right">
            {{ Form::submit('Enregistrer',['class'=>'btn btn-success']) }}
        </div>
    {!! Form::close() !!}
</fieldset>
@endsection
