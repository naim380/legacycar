@extends('layout')

@section('content')

    <h1>Fiche du produit {{$car->id}}</h1>
    <p>This is an awesome car {{ $car->marque}} - {{ $car->model}}</p>

@endsection



