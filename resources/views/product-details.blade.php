@extends('layout')
@section('content')

    <section class="product-self">
        <div class="container">
            <div class="text-center col-sm-4 offset-4">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <h1 class="self-title">{{ $car->marque }} {{ $car->model }}</h1> // permet laffichage des vehiciles pour chaque vendeur
            <div class="row">
                <div class="col-md-6 self-img"><img class="" src="{{ asset('photo/products/'.$car->picture) }}" alt="..."></div>
                <div class="col-md-6">
                    <p class="self-text">{{ $car->description }}</p>
                    <div class="row self-detail justify-content-between align-items-end mb-5">
                        <div class="col-3 text-primary">année : {{ $car->year }}</div>
                        <div class="col-3 text-primary">kilométrage : {{ $car->km }} km</div>
                        <div class="col-3 text-primary">prix : {{ $car->prix }}€</div>
                        <div class="col-3"><a href="{{ route('product-self',$car->id) }}" class="self-btn btn btn-lc">Acheter</a></div>
                    </div>
                    <div class="self-seller">
                        <h3>A propos du vendeur</h3>
                        <p>{{ $car->vendeur->firstname}} {{ $car->vendeur->lastname }}</p>
                        <p>{{ $car->vendeur->mail }}</p>
                        <p>{{ $car->vendeur->phone }}</p>
                    </div>
                </div>
            </div>




        </div>
    </section>
@endsection




{{--@extends('layout')--}}
{{--@section('content')--}}
{{--    @foreach($products as $product) <!--utilisation de la boucle sans model -->--}}
{{--    <h1>Fiche du produit sans model {{$car->id}} </h1>--}}
{{--        <p>{{ $car->marque }} {{ $car->model }}</p>--}}
{{--    <img src="{{asset("photo/". $car->picture)}}" class="d-block w-50" alt="...">--}}
{{--    @endforeach--}}
{{--    <hr>--}}
{{--    <h1>Fiche du produit avec model{{$car->id}} </h1>--}}
{{--    <p>{{ $car->marque }} {{ $car->model }}</p>--}}
{{--    <img src="{{asset("photo/". $car->picture)}}" class="d-block w-50" alt="...">--}}
{{--@endsection--}}

