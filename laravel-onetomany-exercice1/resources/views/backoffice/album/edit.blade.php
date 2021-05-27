@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    <h1 class="text-center my-5">Edit User</h1>

    <div class="container">
        <form action={{ route('albums.update', $album->id) }} method="post">
            @csrf
            @method('put')
            <div class="mb-3">
              <label class="form-label">Nom</label>
              <input type="text" class="form-control" name="nom" value={{ $album->nom }}>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea type="text" class="form-control" cols="30" rows="5" name="description" >
                    {{ $album->description }}
                </textarea>
            </div>
    
            <button type="submit" class="btn text-white btn-primary">Submit</button>
        </form>
    </div>

@endsection