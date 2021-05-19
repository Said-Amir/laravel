@extends('layouts.app')

@section('content')
    <section class="container">
        <h2 class="text-center my-4">Edit Eleves</h2>
        <form method="POST" action="/eleve/{{ $eleve->id }}/update">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" value="{{ $eleve->nom }}" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">Prénom</label>
                <input type="text" class="form-control" value="{{ $eleve->prenom }}" name="prenom">
            </div>
            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" class="form-control" value="{{ $eleve->age }}" name="age">
            </div>
            <div class="mb-3">
                <label class="form-label">Date de naissance</label>
                <input type="date" class="form-control" value="{{ $eleve->dob }}" name="dob">
            </div>

            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" name="estBelge" {{ $eleve->estBelge==="Belge" ? 'checked' : "" }}>
                <label class="form-check-label">Belge</label>
            </div>

            <button type="submit" class="btn btn-primary text-light">Submit</button>
        </form>
    </section>
@endsection