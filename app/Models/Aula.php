<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    public function desporto() {
        return $this->belongsTo(Desporto::class, 'desporto_id', 'id','modalidades');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function atletas(){
        return $this->belongsTo(atletas::class);
    }
}
