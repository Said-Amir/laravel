@extends('layout.app')
@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
        <img style="width : 200px" src={{ asset('img/'. $article->img) }} alt="">        <div class="card-body">
          <h5 class="card-title">article</h5>
            <p>Nom :{{ $article->nom }}</p>
            <p>Description:{{ $article->description }}</p>
            <p>Categorie:{{ $article->categorie }}</p>
            <p>Categorie:{{ $article->nda }}</p>
            <p>Categorie:{{ $article->ddp }}</p>


          <a href="{{ route("articles.index") }}" class="btn btn-primary">return home</a>
        </div>
      </div>
</div>
    
@endsection