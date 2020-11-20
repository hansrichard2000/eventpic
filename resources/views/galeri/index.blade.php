@extends('layouts.html')

@section('judul')
    Galeri
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
            <a class="nav-link" href="/galeri">Galeri</a>
        </div>
        </div>
    </div>
</nav>
<br><br>
<div class="container mt-5">
    <form action="{{route('galeri.create')}}">
        @csrf
        <input type="submit" class="btn btn-primary" value="tambah">
    </form>
    <div class="row row-cols-2">
        @foreach ($galeris as $galeri)
            <div>
                <div class="card" style="width: 18rem;">
                    <img src="/image/place/{{$galeri->picture}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$galeri->nama}}</h5>
                      <p class="card-text">{{$galeri->desc}}</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
