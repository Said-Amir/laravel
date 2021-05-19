<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function index(){
        $eleves = Eleve::all();
        $current = 'eleve';
        return view('backoffice.eleve.all', compact('eleves', 'current'));
    }

    public function destroy($id){
        $itemToDelete = Eleve::find($id);
        $itemToDelete->delete();

        return redirect()->back();
    }

    public function edit($id){
        $eleve = Eleve::find($id);
        $current = 'eleve';
        return view('backoffice.eleve.edit', compact('eleve', 'current'));
    }

    public function update($id, Request $request){
        $eleve = Eleve::find($id);
        $eleve->nom = $request->nom;
        $eleve->prenom = $request->prenom;
        $eleve->age = $request->age;
        $eleve->dob = $request->dob;
        if ($request->estBelge === 'on') {
            $eleve->estBelge = "Belge";
        }else{
            $eleve->estBelge = "Non Belge";
        }
        $eleve->updated_at = now();

        $eleve->save();
        return redirect()->route('eleve');
    }
}