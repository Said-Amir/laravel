@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="border-bottom fw-bolder ">Eleves</h1>
    <div class="row border-bottom mt-5">
        <div class="col"><span class="fs-2 fw-bold">Nom</span></div>
        <div class="col"><span class="fs-2 fw-bold">Prenom</span></div>
        <div class="col"><span class="fs-2 fw-bold">Age</span></div>
        <div class="col"><span class="fs-2 fw-bold">Date de naissance</span></div>
        <div class="col"><span class="fs-2 fw-bold">Nationalité</span></div>
        <div class="col"><span class="fs-2 fw-bold">Action</span></div>
    </div>

    @foreach ($eleves as $eleve)
        <div class="row mt-4 align-items-center">
            <div class="col"><span>{{ $eleve->nom }}</span></div>
            <div class="col"><span>{{ $eleve->prenom }}</span></div>
            <div class="col"><span>{{ $eleve->age }}</span></div>
            <div class="col"><span>{{ $eleve->dob }}</span></div>
            <div class="col"><span>{{ $eleve->estBelge }}</span></div>
            <div class="col d-flex">
                <a class="btn btn-primary btn-sm text-white me-2" href="/eleve/{{ $eleve->id }}/edit">Edit</a>
                <form action="/eleve/{{ $eleve->id }}/delete" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm text-white ">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection