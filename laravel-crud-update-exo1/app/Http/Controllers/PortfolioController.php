<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $portfolios = Portfolio::all();
        $current = 'portfolio';
        return view('backoffice.portfolios.all', compact('portfolios', 'current'));
    }

    public function destroy($id){
        $portfolio = Portfolio::find($id);
        $portfolio->delete();

        return redirect()->back();
    }

    public function edit($id){
        $portfolio = Portfolio::find($id);
        $current = 'portfolio';
        return view('backoffice.portfolios.edit', compact('portfolio', 'current'));
    }

    public function update($id, Request $request){
        $portfolio = Portfolio::find($id);
        $portfolio->titre =  $request->titre;
        $portfolio->description =  $request->description;
        $portfolio->path =  $request->path;
        $portfolio->categorie =  $request->categorie;
        $portfolio->updated_at = now();

        $portfolio->save(); 
        return redirect()->route('portfolio');
    }

    public function create(){
        $current = 'portfolio';
        return view('backoffice.portfolios.create', compact('current'));
    }

    public function store(Request $request){
        $portfolio = new Portfolio();
        $portfolio->titre =  $request->titre;
        $portfolio->description =  $request->description;
        $portfolio->path =  $request->path;
        $portfolio->categorie =  $request->categorie;
        $portfolio->created_at = now();

        $portfolio->save(); 
        return redirect()->route('portfolio');
    }
}