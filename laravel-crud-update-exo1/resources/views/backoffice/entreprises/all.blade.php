@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h1>Entreprise</h1>

        <a class="btn btn-success text-white" href="/entreprises/create">Create</a>
        <div class="row border-bottom mb-5 mt-3">
            <div class="col-2">
                <h2>Nom : </h2>
            </div>
            <div class="col-2">
                <h2>Adresse : </h2>
            </div>
            <div class="col-2">
                <h2>Numero de téléphone : </h2>
            </div>
            <div class="col-2">
                <h2>Personne de contact : </h2>
            </div>
            <div class="col-2">
                <h2>Image : </h2>
            </div>
            <div class="col-2">
                <h2>Action : </h2>
            </div>
        </div>

        @foreach ($entreprises as $entreprise)
        <div class="row">
            <div class="col-2">
                <p>{{ $entreprise->nom }}</p>
            </div>
            <div class="col-2">
                <p>{{ $entreprise->adresse }}</p>
            </div>
            <div class="col-2">
                <p>{{ $entreprise->numTel }}</p>
            </div>
            <div class="col-2">
                <p>{{ $entreprise->personneContact }}</p>
            </div>
            <div class="col-2 overflow-hidden">
                <p>{{ $entreprise->image }}</p>
            </div>
            <div class="col-2">
                <form action="/entreprises/{{ $entreprise->id }}/destroy" method="post">
                    @csrf
                    <a class="btn btn-primary btn-sm me-2 text-white" href="/entreprises/{{ $entreprise->id }}/edit">Edit</a>
                    <button class="btn btn-danger btn-sm text-white" type="submit">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

@endsection