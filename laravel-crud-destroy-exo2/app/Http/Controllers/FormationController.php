<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index(){
        $formations = Formation::all();
        $current = 'formation';
        return view('backoffice.formation.all', compact('formations', 'current'));
    }

    public function destroy($id){
        $itemToDelete = Formation::find($id);
        $itemToDelete->delete();

        return redirect()->back();
    }

    public function edit(Formation $formation){
        $current = 'formation';
        return view('backoffice.formation.edit', compact('formation', 'current'));
    }

    public function update($id, Request $request){
        $formation = Formation::find($id);
        $formation->nom = $request->nom;
        $formation->nbPersonnes = $request->nbPersonnes;
        $formation->nbPersonnesHC = $request->nbPersonnesHC;
        $formation->description = $request->description;

        $formation->updated_at = now();
        $formation->save();

        return redirect()->route('formation');
    }
}