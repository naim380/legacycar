@extends('layout')

@section('content')

    <h1>Fiche du produit {{$car->id}}</h1>
    <p>This is an awesome car {{ $car->marque}} - {{ $car->model}}</p>
    <p>
      @if($car->prix >=1000000)
          <p>voiture cher</p>
        @else
            <p>voiture moins cher</p>
        @endif
    </p>

@endsection



