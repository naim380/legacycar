@extends('layout_backoffice')

@section('content')

    @foreach ($cars as $car)
        <p>This is an awesome car {{ $car->marque}} - {{ $car->model}} : <form action="delete/{{$car->id}}" method="post">@csrf @method("delete") <button type="submit">supprimer</button></form></p>
    @endforeach
@endsection

