@extends('layout_backoffice')

@section('content')

    <form action="/validate" method="post">
        @csrf
        <input type="Marque" name="marque" placeholder="marque" value="{{$car->marque}}">
        <input type="Model" name="model" placeholder="model" value="{{$car->model}}">
        <input type="Year" name="year" placeholder="year" value="{{$car->year}}">
        <input type="Km" name="km" placeholder="km" value="{{$car->km}}">
        <input type="Prix" name="prix" placeholder="prix" value="{{$car->prix}}">
        <input type="Picture" name="picture" placeholder="picture" value="{{$car->picture}}">
        <input type="Description" name="description" placeholder="description" value="{{$car->desciption}}">
        <input type="submit" value="Soumettre">

@endsection

