<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commentaire = Commentaire::paginate(5);
        return view('backoffice.commentaire.all', compact('commentaire'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.commentaire.create');
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
            'nom'=>"required|max:255",
            'mail'=>"required",
            'message'=>"required",
            'dateCom'=>"required",
        ]);

        $commentaire = new commentaire();

        $commentaire->nom = $request->nom;
        $commentaire->mail = $request->mail;
        $commentaire->message = $request->message;
        $commentaire->dateCom = $request->dateCom;
        $commentaire->created_at = now();

        $commentaire->save();

        return redirect()->route('commentaires.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaire $commentaire)
    {
        return view('backoffice.commentaire.show', compact('commentaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaire $commentaire)
    {
        return view('backoffice.commentaire.edit', compact('commentaire'));
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
            'nom'=>"required|max:255",
            'mail'=>"required",
            'message'=>"required",
            'dateCom'=>"required",
        ]);

        $commentaire->nom = $request->nom;
        $commentaire->mail = $request->mail;
        $commentaire->message = $request->message;
        $commentaire->dateCom = $request->dateCom;
        $commentaire->updated_at = now();

        $commentaire->save();

        return redirect()->route('commentaires.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaire $commentaire)
    {
        Storage::disk('public')->delete('img/' . $commentaire->image);
        $commentaire->delete();

        return redirect()->back();
    }

    public function download($id){
        $commentaire = Commentaire::find($id);
        return Storage::disk('public')->download('img/' . $commentaire->image );
    }
}
