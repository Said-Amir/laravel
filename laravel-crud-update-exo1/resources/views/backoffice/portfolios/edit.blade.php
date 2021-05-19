@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Edit</h2>

        <form action="/portfolios/{{ $portfolio->id }}/update" method="post">
            @csrf
            <div class="mb-3">
              <label class="form-label">Titre : </label>
              <input type="text" class="form-control" value={{ $portfolio->titre }} name="titre">
            </div>

            <div class="mb-3">
                <p>Description</p>
                <textarea cols="10" rows="3" class="form-control" name="description">{{ $portfolio->description }}</textarea>
            </div>
            
            <div class="mb-3">
              <label class="form-label">Path:</label>
              <input type="text" class="form-control" name="path" value={{ $portfolio->path }}>
            </div>

            <div class="mb-3">
                <label class="form-label">Catégorie :</label>
                <input type="text" class="form-control" name="categorie" value={{ $portfolio->categorie }}>
            </div>

            <button type="submit" class="btn btn-primary text-white">Submit</button>
        </form>
    </div>
@endsection