<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Premio extends Model
{
    use HasFactory;

    protected $table = 'premios';

    public function sorteio()
    {
        return $this->belongsTo(Sorteio::class);
    }

    public function premioImagem()
    {
        return $this->hasOne(PremioImagem::class);
    }
}
