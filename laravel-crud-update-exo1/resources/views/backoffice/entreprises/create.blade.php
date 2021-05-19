@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Create</h2>
        <form action="/entreprises/store" method="post">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nom : </label>
              <input type="text" class="form-control" name="nom">
            </div>

            <div class="mb-3">
                <p>Adresse</p>
                <textarea cols="10" rows="3" class="form-control" name="adresse"></textarea>
            </div>
            
            <div class="mb-3">
              <label class="form-label">Numéro de téléphone :</label>
              <input type="text" class="form-control" name="numTel">
            </div>

            <div class="mb-3">
                <label class="form-label">Personne de contact :</label>
                <input type="text" class="form-control" name="personneContact">
            </div>

            <div class="mb-3">
                <label class="form-label">Image :</label>
                <input type="text" class="form-control" name="image">
            </div>

            <button type="submit" class="btn btn-primary text-white">Submit</button>
        </form>
    </div>
@endsection