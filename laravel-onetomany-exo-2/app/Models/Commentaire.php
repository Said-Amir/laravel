<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'mail',
        'message',
        'dateCom',
        'article_id'
    ];

    protected $table = 'commentaires';

    public function article(){
        return $this->belongsTo(Article::class);
    }
}