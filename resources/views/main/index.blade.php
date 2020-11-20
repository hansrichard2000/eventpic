@extends('layouts.html')

@section('judul')
    Main Event
@endsection

@section('content')
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Hans' Pic </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="/place">Features</a>
            <a class="nav-link" href="#">Pricing</a>
        </div>
        </div>
    </div>
</nav>
<br><br>
<div class="container mt-5">
    <form action="{{route('main.create')}}" method="GET">
        @csrf
        <input class="btn btn-primary" type="submit" value="Add">
    </form>
    <br>
    <div class="row row-cols-3">
        @foreach ($mains as $main)
            <div class="col mt-3">
                <div class="card" style="width: 18rem;">
                    <img src="/image/{{$main->picture}}" class="card-img-top" alt="images">
                    <div class="card-body">
                      <h5 class="card-title">{{$main->name}}</h5>
                      <p class="card-text">{{$main->desc}}</p>
                      <form action="{{route('main.destroy', $main)}}" method="POST">
                          @csrf
                          <input type="hidden" name="_method" value="DELETE">
                          <input class="btn btn-danger" type="submit" value="Delete" id="delete" name="delete">
                      </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
