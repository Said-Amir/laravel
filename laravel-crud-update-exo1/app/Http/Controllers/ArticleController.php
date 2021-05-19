<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();
        $current = 'article';
        return view('backoffice.articles.all', compact('articles', 'current'));
    }

    public function destroy($id){
        $article = Article::find($id);
        $article->delete();

        return redirect()->back();
    }

    public function edit($id){
        $article = Article::find($id);
        $current = 'article';
        return view('backoffice.articles.edit', compact('article', 'current'));
    }

    public function update($id, Request $request){
        $article = Article::find($id);
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->auteur = $request->auteur;
        $article->poste = $request->poste;

        $article->save();
        return redirect()->route('article');
    }

    public function create(){
        $current = 'article';
        return view('backoffice.articles.create', compact('current'));
    }

    public function store(Request $request){
        $article = new Article();
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->auteur = $request->auteur;
        $article->poste = $request->poste;

        $article->save();
        return redirect()->route('article');
    }
}