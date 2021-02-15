@extends('layout_backoffice')

@section('content')

    <form action="/modifier/{{$car->id}}" method="post">
        @csrf
        @method('put')
        <input type="text" name="marque" placeholder="marque" value="{{$car->marque}}">
        <input type="text" name="model" placeholder="model" value="{{$car->model}}">
        <input type="number" name="year" placeholder="year" value="{{$car->year}}">
        <input type="number" name="km" placeholder="km" value="{{$car->km}}">
        <input type="number" name="prix" placeholder="prix" value="{{$car->prix}}">
        <input type="text" name="picture" placeholder="picture" value="{{$car->picture}}">
        <input type="text" name="description" placeholder="description" value="{{$car->description}}">
        <input type="submit" value="Soumettre">
    @foreach($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach

@endsection

