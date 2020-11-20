@extends('layouts.html')

@section('judul')
    Create
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
    <form action="{{route('place.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name : </label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label for="desc">Description : </label>
            <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="picture">Input Picture</label>
            <input type="file" class="form-control-file" name="picture" id="picture">
        </div>
        <input class="btn btn-primary" type="submit" id="submit" name="submit" value="Submit">
    </form>
</div>
@endsection
