@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <a class="btn btn-sm text-white mx-1 fg-dark bg-dark" href={{ route("equipes.index") }}><span class='mif-arrow-left'></span></a>
        <h1 class="myFont border-bottom mt-4 pb-3">Create Equipe</h1>
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
            <div class="col-lg-6">
                <img src={{ asset("img/create.svg") }} alt="create">
            </div>

            <div class="col-lg-6 mt-5">
                <form class="fg-dark" action={{ route('equipes.store') }} method="POST" enctype="multipart/form-data">
                    @csrf
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
                        />
                        
                    </div>

                    <div class="form-group">
                        <input 
                            data-label="Ville" 
                            data-icon="<span class='mif-location-city'>" 
                            data-cls-line="bg-darkGray"
                            data-cls-label="fg-darkGray"
                            data-cls-informer="fg-darkGray"
                            data-cls-icon="fg-darkGray" 
                            data-role="materialinput" 
                            type="text" 
                            placeholder="Ville"
                            name="ville"
                        />
                        
                    </div>

                    <div class="form-group">
                        <input 
                            data-label="Pays" 
                            data-icon="<span class='mif-earth'>" 
                            data-cls-line="bg-darkGray"
                            data-cls-label="fg-darkGray"
                            data-cls-informer="fg-darkGray"
                            data-cls-icon="fg-darkGray" 
                            data-role="materialinput" 
                            type="text" 
                            placeholder="Pays" 
                            name="pays"
                        />
                    </div>
                    
                    <div class="w-100">
                        <div class="container">
                            <input
                                data-label="Max" 
                                data-icon="<span class='mif-users'>" 
                                data-cls-line="bg-darkGray"
                                data-cls-label="fg-darkGray"
                                data-cls-informer="fg-darkGray"
                                data-cls-icon="fg-darkGray" 
                                data-role="materialinput" 
                                class="w-75"
                                type="number"
                                placeholder="Max joueurs"
                                name="max"
                            />
                            <div class="row justify-content-around">
                                <div class="col-6">
                                    <input
                                        data-label="Max"
                                        data-cls-line="bg-darkGray"
                                        data-cls-label="fg-darkGray"
                                        data-cls-informer="fg-darkGray"
                                        data-cls-icon="fg-darkGray" 
                                        data-role="materialinput" 
                                        class="w-75"
                                        type="number"
                                        placeholder="Attaquants"
                                        name="att"
                                    />
                                </div>
    
                                <div class="col-6">
                                    <input
                                        data-label="Max"
                                        data-cls-line="bg-darkGray"
                                        data-cls-label="fg-darkGray"
                                        data-cls-informer="fg-darkGray"
                                        data-cls-icon="fg-darkGray" 
                                        data-role="materialinput" 
                                        class="w-75"
                                        type="number"
                                        placeholder="Milieux"
                                        name="ct"
                                    />
                                </div>
                            </div>

                            <div class="row justify-content-around">
                                <div class="col-6">
                                    <input
                                        data-label="Max"
                                        data-cls-line="bg-darkGray"
                                        data-cls-label="fg-darkGray"
                                        data-cls-informer="fg-darkGray"
                                        data-cls-icon="fg-darkGray" 
                                        data-role="materialinput" 
                                        class="w-75"
                                        type="number"
                                        placeholder="D??fenseurs"
                                        name="dc"
                                    />
                                </div>
    
                                <div class="col-6">
                                    <input
                                        data-label="Max"
                                        data-cls-line="bg-darkGray"
                                        data-cls-label="fg-darkGray"
                                        data-cls-informer="fg-darkGray"
                                        data-cls-icon="fg-darkGray" 
                                        data-role="materialinput" 
                                        class="w-75"
                                        type="number"
                                        placeholder="Rempla??ants"
                                        name="rp"
                                    />
                                </div>
                            </div>

                        </div>
                    </div>
                    <select data-role="select" class="mb-2" name="continent_id">
                        <optgroup label="Continents">
                            @foreach ($continents as $continent)
                            <option value={{ $continent->id }}>{{ $continent->nom }}</option>
                            @endforeach
                        </optgroup>
                    </select>
                    
                    <input type="file" name="logo" data-role="file" data-button-title="<span class='mif-folder'></span>">
                    <div class="form-group mt-3">
                        <button class="button bg-darkGray success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection