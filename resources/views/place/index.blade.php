@extends('layouts.html')

@section('judul')
    Feature
@endsection

@section('content')
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Hans' Pic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link active" href="/place">Features</a>
            <a class="nav-link" href="#">Pricing</a>
        </div>
        </div>
    </div>
</nav>
<br>
<div class="container mt-5">
    <form action="{{route('place.create')}}" method="GET">
        <button class="btn btn-primary" href="{{route('place.create')}}">
            Add
        </button>
    </form>
    <div class="row row-cols-4">
        @foreach ($places as $place)
            <div class="col mt-3">
                <div class="card">
                    <img src="/image/place/{{$place->picture}}" class="card-img-top" alt="images">
                    <div class="card-body">
                      <h5 class="card-title">{{$place->name}}</h5>
                      <p class="card-text">{{$place->desc}}</p>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
