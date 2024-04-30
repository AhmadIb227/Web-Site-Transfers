<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'symbol', 'usd_rate', 'eur_rate', 'sy_rate', 'tr_rate'];

    public function rates()
    {
        return $this->belongsTo((Rate::class));
    }
}

