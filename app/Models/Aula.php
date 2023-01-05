<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    public function desporto() {
        return $this->belongsTo(Desporto::class, 'desporto_id', 'id');
    }
}
