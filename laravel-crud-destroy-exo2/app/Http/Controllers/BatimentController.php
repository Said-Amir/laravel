<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use Illuminate\Http\Request;

class BatimentController extends Controller
{
    public function index(){
        $batiments = Batiment::all();
        $current = 'batiment';
        return view('backoffice.batiment.all', compact('batiments', 'current'));
    }

    public function destroy($id){
        $itemToDelete = Batiment::find($id);
        $itemToDelete->delete();

        return redirect()->back();
    }

    public function edit($id){
        $current = 'batiment';
        $batiment = Batiment::find($id);
        return view("backoffice.batiment.edit", compact("batiment", 'current'));
    }

    public function update($id, Request $request){
        $batiment = Batiment::find($id);
        $batiment->nom = $request->nom;
        $batiment->adresse = $request->adresse;
        $batiment->description = $request->description;
        $batiment->updated_at = now();

        $batiment->save();
        return redirect()->route('batiment');
    }
}