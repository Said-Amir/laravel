@extends('layout.app')
@section('content')
    <section class="container">
    <h2 class="text-center my-4">Edit article</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach

  </ul>
    <form method="POST" action="/articles/{{ $article->id }}" enctype="multipart/form-data">
        @csrf
        @method("put")
        <div class="mb-3">
          <label class="form-label">nom</label>
          <input value="{{ $article->nom }}" type="text" class="form-control"  name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" class="form-control"  name="img">
          </div>
        <div class="mb-3">
            <label class="form-label">description</label>
            <input value="{{ $article->description }}" type="text" class="form-control"  name="description">
        </div>
        <div class="mb-3">
            <label class="form-label">categorie</label>
            <select name="categorie" id="">
                <option value="La crypto en sueur"> La crypto en sueur</option>
                <option value="L'or en fire"> L'or en fire </option>
                <option value="Elon Musk un fou">Elon Musk un fou</option>
            </select>
        </div>  
        <div class="mb-3">
            <label class="form-label">Nom d'auteur</label>
            <input value="{{ $article->description }}" type="text" class="form-control"  name="nda">
        </div>
        <div class="mb-3">
            <label class="form-label">Date de parution</label>
            <input value="{{ $article->description }}" type="date" class="form-control"  name="ddp">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>

@endsection