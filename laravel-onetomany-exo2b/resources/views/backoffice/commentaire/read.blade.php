@extends('layout.app')
@section('content')
    

<div class="d-flex justify-content-center mt-5">
    <div class="card p-4" style="width: 18rem;">
          <h5 class="card-title">commentaire</h5>
            <p>Nom :{{ $commentaire->nom }}</p>
            <p>Email:{{ $commentaire->mail }}</p>
            <p>Message:{{ $commentaire->message }}</p>
            <p>Date du commentaire:{{ $commentaire->ddc }}</p>

          <a href="{{ route("commentaires.index") }}" class="btn btn-sm  btn-dark"><--</a>
        </div>
      </div>
</div>

@endsection