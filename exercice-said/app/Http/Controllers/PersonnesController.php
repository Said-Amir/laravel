<?php

namespace App\Http\Controllers;

use App\Models\Personnes;
use Illuminate\Http\Request;

class PersonnesController extends Controller
{
    public function index(){
        $personnes = Personnes::all();
        return view('welcome', compact('personnes'));
    }

    public function destroy($id){
        $personneDeleted = Personnes::find($id);
        $personneDeleted->delete();

        return redirect()->back();
    }
}