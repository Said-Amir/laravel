<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Personne;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    public function index(){
        $personnes = Personne::all();
        return view('welcome', compact('personnes'));
    }

    public function destroy($id){
        $user = Personne::find($id);
        $user->delete();

        return redirect()->back();
    }
}