<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function index(){
        $entreprises = Entreprise::all();
        $current = 'entreprise';
        return view('backoffice.entreprises.all', compact('entreprises', 'current'));
    }

    public function destroy($id){
        $entreprise = Entreprise::find($id);
        $entreprise->delete();

        return redirect()->back();
    }

    public function edit($id){
        $entreprise = Entreprise::find($id);
        $current = 'entreprise';
        return view('backoffice.entreprises.edit', compact('entreprise', 'current'));
    }

    public function update($id, Request $request){
        $entreprise = Entreprise::find($id);
        $entreprise->nom = $request->nom;
        $entreprise->adresse = $request->adresse;
        $entreprise->numTel = $request->numTel;
        $entreprise->personneContact = $request->personneContact;
        $entreprise->image = $request->image;

        $entreprise->save();

        return redirect()->route('entreprise');
    }

    public function create(){
        $current = 'entreprise';
        return view('backoffice.entreprises.create', compact('current'));
    }

    public function store(Request $request){
        $entreprise = new Entreprise();
        $entreprise->nom = $request->nom;
        $entreprise->adresse = $request->adresse;
        $entreprise->numTel = $request->numTel;
        $entreprise->personneContact = $request->personneContact;
        $entreprise->image = $request->image;

        $entreprise->save();

        return redirect()->route('entreprise');
    }
}