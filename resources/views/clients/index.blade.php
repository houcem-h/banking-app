@extends('layouts.app')
@section('content')
  <a href="{{ route('clients.create') }}">
    <button type="button" name="button" class="btn btn-primary">Nouveau client</button>
  </a>
  <h2>Liste des clients</h2>
  @if (count($clients) > 0)
        <ul class="list-group">
          @foreach ($clients as $client)
            <li class="list-group-item">
                <a href="{{ route('clients.show', ['id'=> $client->id]) }}">{{$client->prenom}} {{$client->nom}}</a>
                <small class="pull-right">{{$client->tel}}</small>
            </li>
          @endforeach
          <div class="text-center">
            {{$clients->links()}}
          </div>
        </ul>
  @else
            Il n y'a pas de clients
  @endif
@endsection
