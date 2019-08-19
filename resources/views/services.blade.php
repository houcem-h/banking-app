@extends('layouts.app')
@section('content')
  <div class="content">
      <div class="title m-b-md">
          <h2>Nos {{$title}}</h2>
          <p>Les services offerts par cette application sont les suivants :</p>
      </div>
      @if (count($servicesList) > 0)
        <ul class="list-group">
          @foreach ($servicesList as $service)
              <li class="list-group-item">{{$service}}</li>
          @endforeach
        </ul>
      @endif
  </div>
@endsection
