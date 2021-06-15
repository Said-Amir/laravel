<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioImage extends Model
{
    use HasFactory;

    protected $table = 'portfolioImages';

    protected $fillable = [
        "url",
        "filter_id"
    ];

    public function filter(){
        $this->belongsTo(Filter::class);
    }
}
