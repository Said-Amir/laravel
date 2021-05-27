<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'image',
        'categorie',
        'description',
        'auteur',
        'datePublication'
    ];

    protected $table = 'articles';

    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }
    
}