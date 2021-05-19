@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Create</h2>
        <form action="/portfolios/store" method="post">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Titre : </label>
              <input type="text" class="form-control" name="titre">
            </div>

            <div class="mb-3">
                <p>Description</p>
                <textarea cols="10" rows="3" class="form-control" name="description"></textarea>
            </div>
            
            <div class="mb-3">
              <label class="form-label">Path:</label>
              <input type="text" class="form-control" name="path">
            </div>

            <div class="mb-3">
                <label class="form-label">Catégorie:</label>
                <input type="text" class="form-control" name="categorie">
            </div>

            <button type="submit" class="btn btn-primary text-white">Submit</button>
        </form>
    </div>
@endsection