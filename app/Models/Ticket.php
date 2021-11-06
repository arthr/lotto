<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tickets';

    public function sorteio()
    {
        return $this->belongsTo(Sorteio::class);
    }

    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }
}
