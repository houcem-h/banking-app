@extends('layouts.app')
@section('content')
  <a href="{{ url()->previous() }}">
      <button class="btn btn-default">Retour</button>
  </a>
  <br><br>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">{{$client->prenom.' '. $client->nom}}</h3>
    </div>
    <div class="panel-body">
      <ul class="list-group">
        <li class="list-group-item">{{$client->dateNaissance}}</li>
        <li class="list-group-item">{{$client->adresse}}</li>
        <li class="list-group-item">{{$client->tel}}</li>
      </ul>
    </div>
    <div class="panel-footer">
      {{--  <a href="clients/{{$client->id}}/edit">  --}}
      <a href="{{ route('clients.edit', ['id'=> $client->id]) }}">
                <button type="button" name="editer" class="btn btn-info">Editer</button>
      </a>
      {!! Form::open(['action' => ['ClientsController@destroy',$client->id],'method'=>'POST', 'class'=>'pull-right']) !!}
          {{Form::hidden('_method','DELETE')}}
          {!! Form::submit('Supprimer', ['class'=>'btn btn-danger']) !!}
      {!! Form::close() !!}
    </div>
  </div>
@endsection
