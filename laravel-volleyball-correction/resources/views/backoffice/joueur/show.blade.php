@extends('layouts.app')


@section('content')


    <div class="container mt-5">
        <a class="btn btn-sm mb-4 text-white mx-1 fg-dark bg-dark" href={{ route("joueurs.index") }}><span class='mif-arrow-left'></span></a>

        <div class="row">
            <h1 class="myFont mb-5 border-bottom pb-3">{{ $joueur->nom }} {{ $joueur->prenom }}</h1>
            
            <div class="col-lg-6 align-items-center">
                <div class="content">
                    <div class="card mt-5">
                        <div class="firstinfo"><img style="height: 120px; width: 120px;" class="border-radius-half" src={{ asset('img/' . $joueur->photo->image) }} />
                            <div class="profileinfo">
                                
                                <div class="w-100">
                                    <h3 class="fg-dark">{{ $joueur->role->poste }} -  {{ $joueur->age }} ans -  {{ $joueur->genre->type }}</h3>
                                </div>
                                <h1 class="myFont">{{ $joueur->origine }}</h1>
                                <h2 class="myFont">{{ $joueur->equipe->nom }}</h2>
                                <div class="w-100">
                                    <span class="bio fw-bold">Contact : </span>
                                </div>

                                <div class="w-100">
                                    <span class="bio">{{ $joueur->email }}</span>
                                    <h3 class="fg-dark">{{ $joueur->phone }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <img class="mt-5" src={{ asset("img/showEquipe.svg") }} alt="showjoueur">
            </div>
        </div>
    </div>
@endsection