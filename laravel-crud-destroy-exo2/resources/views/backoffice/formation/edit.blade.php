@extends('layouts.app')

@section('content')
    <section class="container">
        <form action="/formation/{{ $formation->id }}/update" method="post">
            @csrf
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" value={{ $formation->nom }}>

            <label class="form-label">Nombre de personnes</label>
            <input type="text" class="form-control" name="nbPersonnes" value={{ $formation->nbPersonnes }}>

            <label class="form-label">Nombre de personnes hors conditions</label>
            <input type="number" class="form-control" name="nbPersonnesHC" value={{ $formation->nbPersonnesHC }}>

            <label class="form-laber">Description</label>
            <textarea class="form-control" name="description" cols="30" rows="10">{{ $formation->description }}</textarea>

            <button class="btn btn-primary btn-lg text-white mt-2" type="submit">Submit</button>
        </form>
    </section>
@endsection