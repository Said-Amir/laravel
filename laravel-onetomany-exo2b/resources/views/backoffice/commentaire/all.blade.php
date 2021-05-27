@extends('layout.app')
@section('content')
@include('partial.nav')
    
@if (session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

<div class="container mt-5">
    <div class="card">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0 py-2">commentaires</h3>
                </div>
                <div class="col-4 text-right">
                    <a href={{ route("commentaires.create") }} class="py-3 text-white btn btn-sm btn-primary">Add commentaire</a>
                </div>
            </div>
        </div>
        
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr class="bg-light">
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">mail</th>
                        <th scope="col">message</th>
                        <th scope="col">Date du commentaire</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($commentaires as $commentaire)
                    <tr>
                        <th scope="row">{{ $commentaire->id }}</th>
                        <td><a href="/commentaires/{{ $commentaire->id }}">{{ $commentaire->nom}}</a></td>
                        <td>{{ $commentaire->mail }}</td>
                        <td>{{ $commentaire->message }}</td>
                        <td>{{ $commentaire->ddc }}</td>
                        <td>
                            <div class="d-flex ">
                                <a href="/commentaires/{{ $commentaire->id }}/edit" class="btn btn-sm text-white btn-primary mx-1">Edit</a>
                                <form action="/commentaires/{{ $commentaire->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm text-white btn-danger mx-1 " type="submit">Delete</button>
                                </form>
                                <form action="/commentaires/{{ $commentaire->id }}/download" method="POST">
                                    @csrf
                                    <button class="btn btn-sm text-white btn-warning mx-1" type="submit">Download</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="py-4">
            <nav class="d-flex justify-content-end" aria-label="...">
                {{ $commentaires->links() }} 
            </nav>
        </div>
        
    </div>
    
</div>

@endsection