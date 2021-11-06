<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sorteio extends Model
{
    use HasFactory;

    protected $table = 'sorteios';

    public function premio()
    {
        return $this->hasOne(Premio::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
