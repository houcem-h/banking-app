@extends('layouts.app')
@section('content')
<fieldset>
  <legend>Nouveau compte</legend>  
    {!! Form::open(['action' => 'ClientsController@store', 'method' => 'post']) !!}
        <div class="form-group">
            {{ Form::label('titulaire', 'Titulaire') }}
            <select name="titulaire" id="titulaire" class='form-control'>
                <option value="" selected>Nom titulaire</option>
                @if(count($clients)>0)
                    @foreach($clients as $client)
                        <option value="{{$client->id}}">{{$client->nom}} {{$client->prenom}}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('solde', 'Solde') }}
            {{ Form::number('solde','',['class'=>'form-control', 'placeholder'=>'Solde initial', 'min'=>'10']) }}
        </div>                
        <div class="form-group pull-right">
            {{ Form::submit('Enregistrer',['class'=>'btn btn-success']) }}
        </div>
    {!! Form::close() !!}
</fieldset>
@endsection
