<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = "articles";
    protected $filable = [
        "nom",
        "img",
        "description",
        "categorie",
        "nda",
        "ddp"
    ];
    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }
}
