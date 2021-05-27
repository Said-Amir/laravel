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
                    <h3 class="mb-0 py-2">articles</h3>
                </div>
                <div class="col-4 text-right">
                    <a href={{ route("articles.create") }} class="py-3 text-white btn btn-sm btn-primary">Add article</a>
                </div>
            </div>
        </div>
        
        
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr class="bg-light">
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">img</th>
                        <th scope="col">description</th>
                        <th scope="col">categorie</th>
                        <th scope="col">nda</th>
                        <th scope="col">ddp</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                    <tr>
                        <th scope="row">{{ $article->id }}</th>
                        <td><a href="/articles/{{ $article->id }}">{{ $article->nom}}</a></td>
                        <td><img style="width : 200px" src={{ asset('img/'. $article->img) }} alt=""></td>
                        <td>{{ $article->description }}</td>
                        <td>{{ $article->categorie }}</td>
                        <td>{{ $article->nda }}</td>
                        <td>{{ $article->ddp }}</td>
                        <td>
                            <div class="d-flex ">
                                <a href="/articles/{{ $article->id }}/edit" class="btn text-white btn-sm btn-primary mx-1">Edit</a>
                                <form action="/articles/{{ $article->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger text-white btn-sm mx-1 " type="submit">Delete</button>
                                </form>
                                <form action="/articles/{{ $article->id }}/download" method="POST">
                                    @csrf
                                    <button class="btn btn-warning btn-sm text-white mx-1" type="submit">Download</button>
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
                {{ $articles->links() }} 
            </nav>
        </div>
    </div>
    
</div>
@endsection