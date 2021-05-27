@extends('layout.app')
@section('content')
<section class="container">
    <h2 class="text-center my-4">Edit commentaire</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach

  </ul>
    <form method="POST" action="/commentaires/{{ $commentaire->id }}" enctype="multipart/form-data">
        @csrf
        @method("put")
        <div class="mb-3">
          <label class="form-label">nom</label>
          <input value="{{ $commentaire->nom }}" type="text" class="form-control"  name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">mail</label>
            <input value="{{ $commentaire->mail }}" type="text" class="form-control"  name="mail">
          </div>
          <div class="mb-3">
            <label class="form-label">message</label>
            <input value="{{ $commentaire->message }}" type="text" class="form-control"  name="message">
          </div>
          <div class="mb-3">
            <label class="form-label">Date du commentaire</label>
            <input value="{{ $commentaire->nom }}" type="date" class="form-control"  name="ddc">
          </div>
          
        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
      </form>
</section>
@endsection