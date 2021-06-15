@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <a class="btn btn-sm text-white mx-1 fg-dark bg-dark" href={{ route("joueurs.index") }}><span class='mif-arrow-left'></span></a>
        <h1 class="myFont border-bottom mt-4 pb-3">Edit {{ $joueur->prenom }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row pt-3">

            <div class="col-lg-6 mt-5">
                <form class="fg-dark" action={{ route('joueurs.update', $joueur->id) }} method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">

                        <input 
                            data-label="Nom" 
                            data-icon="<span class='mif-brightness-auto'>" 
                            data-cls-line="bg-darkGray"
                            data-cls-label="fg-darkGray"
                            data-cls-informer="fg-darkGray"
                            data-cls-icon="fg-darkGray" 
                            data-role="materialinput" 
                            type="text" 
                            placeholder="Nom"
                            name="nom"
                            value={{ $joueur->nom }}
                        />
                        
                    </div>

                    <div class="form-group">
                        <input 
                            data-label="Prénom" 
                            data-icon="<span class='mif-wikipedia'>" 
                            data-cls-line="bg-darkGray"
                            data-cls-label="fg-darkGray"
                            data-cls-informer="fg-darkGray"
                            data-cls-icon="fg-darkGray" 
                            data-role="materialinput" 
                            type="text" 
                            placeholder="Prénom"
                            name="prenom"
                            value={{ $joueur->prenom }}
                        />
                    </div>

                    <div class="form-group">
                        <input
                                data-label="Age" 
                                data-icon="<span class='mif-strikethrough'>" 
                                data-cls-line="bg-darkGray"
                                data-cls-label="fg-darkGray"
                                data-cls-informer="fg-darkGray"
                                data-cls-icon="fg-darkGray" 
                                data-role="materialinput" 
                                class="w-75"
                                type="number"
                                placeholder="Age"
                                name="age"
                                value={{ $joueur->age }}
                            />
                    </div>

                    <div class="form-group">
                        <input 
                            data-label="Phone" 
                            data-icon="<span class='mif-phone'>" 
                            data-cls-line="bg-darkGray"
                            data-cls-label="fg-darkGray"
                            data-cls-informer="fg-darkGray"
                            data-cls-icon="fg-darkGray" 
                            data-role="materialinput" 
                            type="text" 
                            placeholder="Phone" 
                            name="phone"
                            value={{ $joueur->phone }}
                        />
                    </div>     

                    <div class="form-group">
                        <input 
                            data-label="Origine" 
                            data-icon="<span class='mif-earth'>" 
                            data-cls-line="bg-darkGray"
                            data-cls-label="fg-darkGray"
                            data-cls-informer="fg-darkGray"
                            data-cls-icon="fg-darkGray" 
                            data-role="materialinput" 
                            type="text" 
                            placeholder="Origine" 
                            name="origine"
                            value={{ $joueur->origine }}
                        />
                    </div>  
                    
                    <div class="form-group">
                        <input 
                            data-label="E-mail" 
                            data-icon="<span class='mif-mail'>" 
                            data-cls-line="bg-darkGray"
                            data-cls-label="fg-darkGray"
                            data-cls-informer="fg-darkGray"
                            data-cls-icon="fg-darkGray" 
                            data-role="materialinput" 
                            type="email" 
                            placeholder="E-mail" 
                            name="email"
                            value={{ $joueur->email }}
                        />
                    </div>  
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <select data-role="select" class="mb-2" name="genre_id">
                                    <optgroup label="Genre">
                                        @foreach ($genres as $genre)
                                        <option value={{ $genre->id }}>{{ $genre->type }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-6">
                                <select data-role="select" class="mb-2" name="role_id">
                                    <optgroup label="Genre">
                                        @foreach ($roles as $role)
                                        <option value={{ $role->id }}>{{ $role->poste }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <select data-role="select" class="mb-2" name="equipe_id">
                            <optgroup label="Genre">
                                @foreach ($equipes as $equipe)
                                <option value={{ $equipe->id }}>{{ $equipe->nom }}</option>
                                @endforeach
                            </optgroup>
                        </select>
                    </div>

                    <input type="file" name="image" data-role="file" data-button-title="<span class='mif-folder'></span>">
                    <div class="form-group mt-3">
                        <button class="button bg-darkGray success">Submit</button>
                    </div>
                </form>
            </div>

            <div class="ps-3 col-lg-6 mt-5">
                <img src={{ asset("img/updates.svg") }} alt="create">
            </div>

        </div>
    </div>
@endsection