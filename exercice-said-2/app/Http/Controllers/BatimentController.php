<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use Illuminate\Http\Request;

class BatimentController extends Controller
{
    public function index(){
        $batiments = Batiment::all();
        return view('partials.batiments', compact('batiments'));
    }

    public function destroy($id){
        $batimentDeleted = Batiment::find($id);
        $batimentDeleted->delete();

        return redirect()->back();
    }
}