@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Create</h2>
        <form action="/articles/store" method="post">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nom : </label>
              <input type="text" class="form-control" name="nom">
            </div>

            <div class="mb-3">
                <p>Description</p>
                <textarea cols="10" rows="3" class="form-control" name="description"></textarea>
            </div>
            
            <div class="mb-3">
              <label class="form-label">Auteur:</label>
              <input type="text" class="form-control" name="auteur">
            </div>

            <div class="mb-3">
                <label class="form-label">Poste:</label>
                <input type="text" class="form-control" name="poste">
            </div>

            <button type="submit" class="btn btn-primary text-white">Submit</button>
        </form>
    </div>
@endsection