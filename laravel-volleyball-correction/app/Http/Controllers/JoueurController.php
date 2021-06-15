<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Genre;
use App\Models\Joueur;
use App\Models\Photo;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $joueurs = Joueur::all();
        $current = 'joueur';
        return view("backoffice.joueur.all", compact('joueurs', 'current'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        $roles = Role::all();
        $equipes = Equipe::all();
        $current = 'joueur';
        return view("backoffice.joueur.create", compact('genres', 'roles', 'equipes', 'current'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "phone"=>"required",
            "email"=>"required",
            "genre_id"=>"required",
            "origine"=>"required",
            "role_id"=>"required",
            "image"=>"required",
            "equipe_id"=>"required",
        ]);

        $joueur = new Joueur();
        $photo = new Photo();
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->age = $request->age;
        $joueur->phone = $request->phone;
        $joueur->email = $request->email;
        $joueur->genre_id = $request->genre_id;
        $joueur->origine = $request->origine;
        $joueur->role_id = $request->role_id;
        $joueur->equipe_id = $request->equipe_id;
        $joueur->created_at = now();

        $joueur->save();

        $photo->image = $request->file("image")->hashName();
        $request->file("image")->storePublicly("img", "public");

        $photo->joueur_id = $joueur->id;
        $photo->created_at = now();

        $photo->save();

        return redirect()->route('joueurs.index')->with("message", "L'équipe $joueur->nom est bien créée.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur)
    {
        $current = 'joueur';
        return view("backoffice.joueur.show", compact('joueur', 'current'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function edit(Joueur $joueur)
    {
        $genres = Genre::all();
        $roles = Role::all();
        $equipes = Equipe::all();
        $current = 'joueur';
        return view("backoffice.joueur.edit", compact('genres', 'roles', 'equipes', 'joueur', 'current'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Joueur $joueur)
    {
        $request ->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "phone"=>"required",
            "email"=>"required",
            "genre_id"=>"required",
            "origine"=>"required",
            "role_id"=>"required",
            "equipe_id"=>"required",
        ]);
            
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->phone = $request->phone;
        $joueur->email = $request->email;
        $joueur->genre_id = $request->genre_id;
        $joueur->origine = $request->origine;
        $joueur->role_id = $request->role_id;
        $joueur->equipe_id = $request->equipe_id;
        $joueur->created_at = now();
        
        $joueur->save();
        $photo = Photo::find($joueur->photo->id);

        if ($request->file("image") !== null) {
            Storage::disk("public")->delete("img/" . $photo->image);
            $photo->image = $request->file("image")->hashName();
            $request->file("image")->storePublicly("img", "public");
            $photo->updated_at = now();

            $photo->save();
        }

        return redirect()->route('joueurs.index')->with("message", "L'équipe $joueur->nom est bien créée.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joueur $joueur)
    {
        Storage::disk("public")->delete("img/" . $joueur->photo->image);
        $joueur->delete();

        return redirect()->back();
    }
}
