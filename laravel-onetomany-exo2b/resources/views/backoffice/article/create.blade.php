@extends('layout.app')
@section('content')
<section class="container">
    <h2 class="text-center my-4">Create article</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach

  </ul>
    <form method="POST" action="{{route("articles.store")  }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label class="form-label">nom</label>
          <input type="text" class="form-control"  name="nom">
        </div>         
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" class="form-control"  name="img">
          </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <input type="text" class="form-control"  name="description">
        </div>
        <div class="mb-3">
            <label class="form-label">Categorie</label>
            <select name="categorie" id="">
                <option value="la crypto en sueur">La crypto en sueur</option>
                <option value="L'or en fire">L'or en fire</option>
                <option value="Elon Musk un fou"> Elon Musk un fou</option>
            </select>
        </div> 
        <div class="mb-3">
            <label class="form-label">Nom d'auteur</label>
            <input type="text" class="form-control"  name="nda">
        </div>
        <div class="mb-3">
            <label class="form-label">date de parution</label>
            <input type="date" class="form-control"  name="ddp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>
@endsection