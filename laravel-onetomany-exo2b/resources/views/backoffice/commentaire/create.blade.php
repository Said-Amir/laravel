@extends('layout.app')
@section('content')
@include('partial.nav')
    

<section class="container">
    <h2 class="text-center my-4">Create commentaire</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach

  </ul>
    <form method="POST" action="{{route("commentaires.store")  }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label class="form-label">nom</label>
          <input type="text" class="form-control"  name="nom">
        </div>     
            
        <div class="mb-3">
            <label class="form-label">Mail</label>
            <input type="text" class="form-control"  name="mail">
        </div>

        <div class="mb-3">
            <label class="form-label">Message</label>
            <input type="text" class="form-control"  name="message">
        </div>
        <div class="mb-3">
            <label class="form-label">Article</label>
            <select name="article_id" class="form-control">
                @foreach ($articles as $article)
                    <option value={{ $article->id }}>{{ $article->categorie }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Date du commentaire</label>
            <input type="date" class="form-control"  name="ddc">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>

@endsection