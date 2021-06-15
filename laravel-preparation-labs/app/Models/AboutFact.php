<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutFact extends Model
{
    use HasFactory;

    protected $table = 'aboutFacts';

    protected $fillable = [
        "icon",
        "title",
        "description",
        "about_id"
    ];

    public function about(){
        $this->belongsTo(About::class);
    }
}