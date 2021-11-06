<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PremioImagem extends Model
{
    use HasFactory;

    protected $table = 'premio_imagens';

    public function premio()
    {
        return $this->belongsTo(Premio::class);
    }
}
