@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h1>Portfolios</h1>

        <a class="btn btn-success text-white" href="/portfolios/create">Create</a>
        <div class="row border-bottom mb-5 mt-3">
            <div class="col">
                <h2>Titre : </h2>
            </div>
            <div class="col">
                <h2>Description : </h2>
            </div>
            <div class="col">
                <h2>Path : </h2>
            </div>
            <div class="col">
                <h2>Catégorie : </h2>
            </div>
            <div class="col">
                <h2>Action : </h2>
            </div>
        </div>

        @foreach ($portfolios as $portfolio)
        <div class="row">
            <div class="col">
                <p>{{ $portfolio->titre }}</p>
            </div>
            <div class="col">
                <p>{{ $portfolio->description }}</p>
            </div>
            <div class="col">
                <p>{{ $portfolio->path }}</p>
            </div>
            <div class="col">
                <p>{{ $portfolio->categorie }}</p>
            </div>
            <div class="col">
                <form action="/portfolios/{{ $portfolio->id }}/destroy" method="post">
                    @csrf
                    <a class="btn btn-primary btn-sm me-2 text-white" href="/portfolios/{{ $portfolio->id }}/edit">Edit</a>
                    <button class="btn btn-danger btn-sm text-white" type="submit">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

@endsection