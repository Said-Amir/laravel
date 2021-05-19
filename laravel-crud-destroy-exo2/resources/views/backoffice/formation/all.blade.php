@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="border-bottom fw-bolder ">Formations</h1>
    <div class="row border-bottom mt-5">
        <div class="col"><span class="fs-2 fw-bold">Nom</span></div>
        <div class="col"><span class="fs-2 fw-bold">Nombre de personnes</span></div>
        <div class="col"><span class="fs-2 fw-bold">Nombre de personnes Hors conditions</span></div>
        <div class="col"><span class="fs-2 fw-bold">Description</span></div>
        <div class="col"><span class="fs-2 fw-bold">Action</span></div>
    </div>

    @foreach ($formations as $formation)
        <div class="row mt-4 align-items-center">
            <div class="col"><span>{{ $formation->nom }}</span></div>
            <div class="col"><span>{{ $formation->nbPersonnes }}</span></div>
            <div class="col"><span>{{ $formation->nbPersonnesHC }}</span></div>
            <div class="col"><span>{{ $formation->description }}</span></div>
            <div class="col d-flex">
                <a href="/formation/{{ $formation->id }}/edit" class="me-2 btn btn-primary btn-sm text-white">Edit</a>
                <form action="/formation/{{ $formation->id }}/delete" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm text-white ">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection