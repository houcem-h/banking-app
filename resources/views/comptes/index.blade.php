@extends('layouts.app')
@section('content')
  <a href="{{ route('comptes.create') }}">
    <button type="button" name="button" class="btn btn-primary">Nouveau compte</button>
  </a>
  <h2>Liste des comptes</h2>
  @if (count($comptes) > 0)
        <table class="table table-bordered">
            <thead>
                <tr>              
                  <th>Code Banque</th>
                  <th>Code Guichet</th>
                  <th>RIB</th>
                  <th>Clé RIB</th>
                  <th>Titulaire</th>
                  <th>Solde</th>
                  <th>Devise</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($comptes as $compte)
                <tr>
                  <td>{{$compte->codeBanq}}</td>
                  <td>{{$compte->codeGuichet}}</td>
                  <td><a href="{{ route('comptes.show', ['id'=> $compte->id]) }}">{{$compte->rib}}</a></td>
                  <td>{{$compte->cleRib}}</td>
                  <td><a href="{{ route('clients.show', ['id'=> $compte->titulaire]) }}">{{$compte->titulaire}}</a></td>
                  <td><strong  class="pull-right">{{$compte->solde}}</strong></td>
                  <td>{{$compte->devise}}</td>
                </tr>
              @endforeach          
            </tbody>
        </table>
        <div class="text-center">
            {{$comptes->links()}}
        </div>
  @else
            Il n y'a pas de comptes
  @endif
@endsection
