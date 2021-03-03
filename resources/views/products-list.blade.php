@extends('layout')

@section('content')

    <h1>Liste des produits</h1>
    @foreach ($cars as $car)
        <p>This is an awesome car {{ $car->marque}} - {{ $car->model}}{{ $car->prix}}</p>
    @endforeach
@endsection

