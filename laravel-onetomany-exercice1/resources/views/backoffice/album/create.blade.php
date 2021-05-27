@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    <h1 class="text-center my-5">Create User</h1>

    <div class="container">
        <form action={{ route('albums.store') }} method="post">
            @csrf
            <div class="mb-3">
              <label class="form-label">Nom</label>
              <input type="text" class="form-control" name="nom">
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea type="text" class="form-control" cols="30" rows="5" name="description"></textarea>
            </div>
    
            <button type="submit" class="btn text-white btn-primary">Submit</button>
        </form>
    </div>

@endsection