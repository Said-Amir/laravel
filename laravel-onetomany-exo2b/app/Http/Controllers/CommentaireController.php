<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commentaires = Commentaire::paginate(3);
        return view('backoffice.commentaire.all',compact("commentaires"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles= Article::all();
        return view("backoffice.commentaire.create",compact("articles"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom"=>"required",
            "mail"=>"required",
            "message"=>"required",
            "ddc"=>"required",
            "article_id"=>"required"

        ]);
        $commentaire = new Commentaire();
        $commentaire->nom = $request->nom;
        $commentaire->mail = $request->mail;
        $commentaire->message = $request->message;
        $commentaire->article_id = $request->article_id;
        $commentaire->ddc = $request->ddc;
        $commentaire->created_at = now();
        $commentaire-> save();
        return redirect()->route("commentaires.index")->with('message','Vous avez bien créée un nouveau commentaires :' . $commentaire->nom);


    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaire $commentaire)
    {
        return view("backoffice.commentaire.read",compact('commentaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaire $commentaire)
    {
        return view("backoffice.commentaire.edit",compact('commentaire'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commentaire $commentaire)
    {
        $request->validate([
            "nom"=>"required",
            "mail"=>"required",
            "message"=>"required",
            "ddc"=>"required",
            "article_id"=>"required"
        ]);
        $commentaire = new Commentaire();
        $commentaire->nom = $request->nom;
        $commentaire->mail = $request->mail;
        $commentaire->message = $request->message;
        $commentaire->article_id = $request->article_id;
        $commentaire->ddc = $request->ddc;
        $commentaire->created_at = now();
        $commentaire-> save();
        return redirect()->route("commentaires.index")->with('message','Vous avez bien créée un nouveau commentaires :' . $commentaire->nom);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaire $commentaire)
    {
        $commentaire->delete();
        return redirect()->back();
    }
}
