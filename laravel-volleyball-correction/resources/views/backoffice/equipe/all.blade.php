@extends('layouts.app')

@section('content')
    
    <div class="container-fluid pt-5">
        <div class="row mt-lg-5">
            <div class="col-lg-7 pt-lg-5">
                <h1 class="myFont mb-5">Equipes  <a class="btn btn-sm text-white mx-1 fg-dark bg-darkGrayBlue" href={{ route("equipes.create") }}><span class="mif-plus"></span></span></a></h1>
                
                <table class="table" data-role="table" data-filters="myFilter" style="overflow-x:auto; min-width: 400px;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Ville</th>
                            <th>Pays</th>
                            <th>Max</th>
                            <th>Att</th>
                            <th>Ct</th>
                            <th>Dc</th>
                            <th>Rc</th>
                            <th>Continent</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="myOverflow">
                    @foreach ($equipes as $equipe)
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

                        $tot = $att + $ct + $dc +$rp
                    @endphp
                        @if ($equipe->nom === 'Sans Equipe')
                            <tr>
                                <td>{{ $equipe->id }}</td>
                                <td>{{ $equipe->nom }}</td>
                                <td><span class="mif-cross-light"></span></td>
                                <td><span class="mif-cross-light"></span></td>
                                <td>{{ $tot }}</td>
                                <td>{{ $att }}</td>
                                <td>{{ $ct }}</td>
                                <td>{{ $dc }}</td>
                                <td>{{ $rp }}</td>
                                <td><span class="mif-cross-light"></span></td>
                                <td><span class="mif-cross-light"></span></td>
                            </tr>
                        @endif
                        @if ($equipe->nom !== 'Sans Equipe')
                            <tr>
                                <td>{{ $equipe->id }}</td>
                                <td>{{ $equipe->nom }}</td>
                                <td>{{ $equipe->ville }}</td>
                                <td>{{ $equipe->pays }}</td>
                                <td>{{ $tot }} /{{ $equipe->max }}</td>
                                <td>{{ $att }} /{{ $equipe->att }}</td>
                                <td>{{ $ct }} /{{ $equipe->ct }}</td>
                                <td>{{ $dc }} /{{ $equipe->dc }}</td>
                                <td>{{ $rp }} /{{ $equipe->rp }}</td>
                                <td>{{ $equipe->continent->nom}}</td>
                                <td>
                                    <div class="d-flex">
                                        <a class="btn btn-sm text-white mx-1 fg-dark bg-darkOlive" href={{ route("equipes.edit", $equipe->id) }}><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-sm text-white mx-1 btn-secondary" href={{ route("equipes.show", $equipe->id) }}><span class="icon"><span class="mif-zoom-in"></span></span></a>
                                        <form action={{ route("equipes.destroy", $equipe->id) }} method="post">
                                            @csrf
                                            @method("delete")
                                            <button class="btn btn-sm text-white mx-1 bg-darkRed" type="submit"><span class="mif-bin"></span></span></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-5 mt-5 mt-lg-1">
                <img src={{ asset("img/equipes.svg") }} alt="">
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