@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h1>Article</h1>

        <a class="btn btn-success text-white" href="/articles/create">Create</a>
        <div class="row border-bottom mb-5 mt-3">
            <div class="col">
                <h2>Nom : </h2>
            </div>
            <div class="col">
                <h2>Description : </h2>
            </div>
            <div class="col">
                <h2>Auteur : </h2>
            </div>
            <div class="col">
                <h2>Poste : </h2>
            </div>
            <div class="col">
                <h2>Action : </h2>
            </div>
        </div>

        @foreach ($articles as $article)
        <div class="row">
            <div class="col">
                <p>{{ $article->nom }}</p>
            </div>
            <div class="col">
                <p>{{ $article->description }}</p>
            </div>
            <div class="col">
                <p>{{ $article->auteur }}</p>
            </div>
            <div class="col">
                <p>{{ $article->poste }}</p>
            </div>
            <div class="col">
                <form action="/articles/{{ $article->id }}/destroy" method="post">
                    @csrf
                    <a class="btn btn-primary btn-sm me-2 text-white" href="/articles/{{ $article->id }}/edit">Edit</a>
                    <button class="btn btn-danger btn-sm text-white" type="submit">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

@endsection