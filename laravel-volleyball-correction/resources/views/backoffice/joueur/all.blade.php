@extends('layouts.app')

@section('content')
    
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-8 pt-lg-5">
                <h1 class="myFont mb-5">Joueurs<a class="btn btn-sm text-white mx-1 fg-dark bg-darkGrayBlue" href={{ route("joueurs.create") }}><span class="mif-plus"></span></span></a></h1>
                
                <table class="table" data-role="table" data-filters="myFilter" style="overflow-x:auto; min-width: 400px;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Age</th>
                            <th>Equipe</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="myOverflow">
                    @foreach ($joueurs as $joueur)
                        <tr>
                            <td>{{ $joueur->id }}</td>
                            <td>{{ $joueur->nom }}</td>
                            <td>{{ $joueur->prenom }}</td>
                            <td>{{ $joueur->age }}</td>
                            <td>{{ $joueur->equipe->nom }}</td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-sm text-white mx-1 fg-dark bg-darkOlive" href={{ route("joueurs.edit", $joueur->id) }}><i class="fas fa-edit"></i></a>
                                    <a class="btn btn-sm text-white mx-1 btn-secondary" href={{ route("joueurs.show", $joueur->id) }}><span class="icon"><span class="mif-zoom-in"></span></span></a>
                                    <form action={{ route("joueurs.destroy", $joueur->id) }} method="post">
                                        @csrf
                                        @method("delete")
                                        <button class="btn btn-sm text-white mx-1 bg-darkRed" type="submit"><span class="mif-bin"></span></span></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-lg-4 mt-5 pt-5">
                <img class="mt-5 pt-5" src={{ asset('img/goal.svg') }} alt="equipe">
            </div>
        </div>
    </div>
    <script>
        function myFilter(row, heads){
            var is_active_index = 0;
            heads.forEach(function(el, i){
                if (el.name === "name") {
                    is_active_index = i;
                }
            });
            return row[is_active_index].contains("");
        }
    </script>

@endsection