@extends('layout_backoffice')

@section('content')

    <form action="/validate" method="post">
        @csrf
        <input type="Marque" name="marque" placeholder="marque">
        <input type="Model" name="model" placeholder="model">
        <input type="Year" name="year" placeholder="year">
        <input type="Km" name="km" placeholder="km">
        <input type="Prix" name="prix" placeholder="prix">
        <input type="Picture" name="picture" placeholder="picture">
        <input type="Description" name="description" placeholder="description">
        <input type="submit" value="Soumettre">

@endsection

