<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Equipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes = Equipe::all();
        $current = 'equipe';
        return view('backoffice.equipe.all', compact('equipes', 'current'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $continents = Continent::all();
        $current = 'equipe';
        return view('backoffice.equipe.create', compact('continents', 'current'));
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
            "ville"=>"required",
            "pays"=>"required",
            "max"=>"required",
            "att"=>"required",
            "ct"=>"required",
            "dc"=>"required",
            "rp"=>"required",
            "continent_id"=>"required"
        ]);

        $equipe = new Equipe();

        $equipe->nom = $request->nom;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->max = $request->max;
        $equipe->att = $request->att;
        $equipe->ct = $request->ct;
        $equipe->dc = $request->dc;
        $equipe->rp = $request->rp;
        $equipe->continent_id = $request->continent_id;

        if ($request->file("logo") !== null) {
            $equipe->logo = $request->file("logo")->hashName();
            $request->file("logo")->storePublicly("img", "public");
        }else{
            $equipe->logo = 'noLogo.png';
        }

        $equipe->created_at = now();

        $equipe->save();

        return redirect()->route('equipes.index')->with("message", "L'équipe $equipe->nom est bien créée.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show(Equipe $equipe)
    {
        $current = 'equipe';
        return view("backoffice.equipe.show", compact('equipe', "current"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipe $equipe)
    {
        $continents = Continent::all();
        $current = 'equipe';
        return view("backoffice.equipe.edit", compact('continents', 'equipe', 'current'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipe $equipe)
    {
        if ($equipe->id === 1) {
            return;
        }

        $request ->validate([
            "nom"=>"required",
            "ville"=>"required",
            "pays"=>"required",
            "max"=>"required",
            "att"=>"required",
            "ct"=>"required",
            "dc"=>"required",
            "rp"=>"required",
            "continent_id"=>"required",
        ]);

        $equipe->nom = $request->nom;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->max = $request->max;
        $equipe->att = $request->att;
        $equipe->ct = $request->ct;
        $equipe->dc = $request->dc;
        $equipe->rp = $request->rp;
        $equipe->continent_id = $request->continent_id;
        $equipe->updated_at = now();

        if ($request->file("logo") !== null) {
            Storage::disk("public")->delete("img/" . $equipe->logo);
            $equipe->logo = $request->file("logo")->hashName();
            $request->file("logo")->storePublicly("img", "public");
        }

        $equipe->save();

        return redirect()->route('equipes.index')->with("message", "L'équipe $equipe->nom est bien modifiées.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipe $equipe)
    {
        if ($equipe->id === 1) {
            return redirect()->back();
        }
        foreach ($equipe->joueurs as $joueur) {
            $joueur->equipe_id = Equipe::where("nom", "Sans Equipe")->first()->id;
            $joueur->save();
        }
        if ($equipe->logo !== "noLogo.png") {
            Storage::disk("public")->delete("img/" . $equipe->logo);
        }
        $equipe->delete();

        return redirect()->back();
    }
}