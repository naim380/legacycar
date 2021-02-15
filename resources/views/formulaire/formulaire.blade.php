@extends('layout_backoffice')

@section('content')

    <form action="/validate" method="post">
        @csrf
        <input type="text" name="marque" placeholder="marque">
        <input type="text" name="model" placeholder="model">
        <input type="text" name="year" placeholder="year">
        <input type="number" name="km" placeholder="km">
        <input type="number" name="prix" placeholder="prix">
        <input type="text" name="picture" placeholder="picture">
        <input type="text" name="description" placeholder="description">
        <input type="submit" value="Soumettre">
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
    @endforeach

@endsection

