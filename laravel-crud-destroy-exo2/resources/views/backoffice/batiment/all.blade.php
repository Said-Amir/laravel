@extends('layouts.app')

@section('content')
    
    <div class="container">
        <h1 class="border-bottom fw-bolder ">Batiments</h1>
        <div class="row border-bottom mt-5">
            <div class="col-3"><span class="fs-2 fw-bold">Nom</span></div>
            <div class="col-3"><span class="fs-2 fw-bold">Ville</span></div>
            <div class="col-3"><span class="fs-2 fw-bold">Description</span></div>
            <div class="col-3"><span class="fs-2 fw-bold">Action</span></div>
        </div>
    
        @foreach ($batiments as $batiment)
            <div class="row mt-4 align-items-center border-bottom">
                <div class="col-3 border-end border-start"><span>{{ $batiment->nom }}</span></div>
                <div class="col-3 border-end"><span>{{ $batiment->adresse }}</span></div>
                <div class="col-3 border-end"><span>{{ $batiment->description }}</span></div>
                <div class="col-3 border-end d-flex">
                    <a class="btn me-2 btn-sm btn-primary text-white" href="/batiment/{{ $batiment->id }}/edit">Edit</a>
                    <form action="/batiment/{{ $batiment->id }}/delete" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm text-white ">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection