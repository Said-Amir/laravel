@extends('layouts.app')

@section('content')

    @php
        $att = 0;
        $ct = 0;
        $dc = 0;
        $rp = 0;

        foreach ($equipe->joueurs as $joueur) {
            switch ($joueur->role_id) {
                case 1:
                    $att++;
                    break;
                case 2:
                    $ct++;
                    break;
                case 3:
                    $dc++;
                    break;
                case 4:
                    $rp++;
                    break;
            }
        }
    @endphp

    <div class="container mt-5">
        <a class="btn btn-sm mb-4 text-white mx-1 fg-dark bg-dark" href={{ route("equipes.index") }}><span class='mif-arrow-left'></span></a>

        <div class="row">
            <h1 class="myFont mb-5 border-bottom pb-3">{{ $equipe->nom }}</h1>
            
            <div class="col-lg-6 align-items-center">
                <div class="content">
                    <div class="card mt-5">
                        <div class="firstinfo"><img src={{ asset('img/' . $equipe->logo) }} />
                            <div class="profileinfo">
                                <h3 class="fg-dark">{{ $equipe->continent->nom }}</h3>
                                <h3 class="fg-dark">{{ $equipe->pays }} - {{ $equipe->ville }}</h3>
                                <h1 class="myFont">{{ $equipe->nom }}</h1>
                                <div class="w-100 d-flex justify-content-between">
                                    <span class="bio">Attaquants : </span>
                                    <span class="bio">{{ $att }} /{{ $equipe->att }}</span>
                                </div>
                                <div class="w-100 d-flex justify-content-between">
                                    <span class="bio">Milieux : </span>
                                    <span class="bio">{{ $ct }} /{{ $equipe->ct }}</span>
                                </div>
                                <div class="w-100 d-flex justify-content-between">
                                    <span class="bio">Défenseurs : </span>
                                    <span class="bio">{{ $dc }} /{{ $equipe->dc }}</span>
                                </div>
                                <div class="w-100 d-flex justify-content-between">
                                    <span class="bio">Remplaçants : </span>
                                    <span class="bio">{{ $rp }} /{{ $equipe->rp }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <img class="mt-5" src={{ asset("img/showEquipe.svg") }} alt="showEquipe">
            </div>
        </div>
    </div>
@endsection