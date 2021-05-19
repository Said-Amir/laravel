@extends('layouts.app')

@section('content')
    <h1 class="text-center fw-bolder border-bottom pb-3">Batiments</h1>
    <div class="container">
        <div class="row py-3 border-bottom">
            <div class="col fw-bold border-end border-start text-center"><span>Nom : </span></div>
            <div class="col fw-bold border-end text-center"><span>Adress : </span></div>
            <div class="col fw-bold border-end text-center"><span>Date de création : </span></div>
            <div class="col fw-bold border-end text-center"><span>Action : </span></div>
        </div>

        @foreach ($batiments as $batiment)
            <div class="row my-3 align-items-center border-bottom">
                <div class="col text-center border-end border-start">{{ $batiment->nom }}</div>
                <div class="col text-center border-end">{{ $batiment->address }}</div>
                <div class="col text-center border-end">{{ $batiment->dateCreation }}</div>
                <div class="col text-center border-end">
                    <form action="/batiments/{{ $batiment->id }}/delete" method="post">
                        @csrf
                        <button type="submit" class="text-white btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection