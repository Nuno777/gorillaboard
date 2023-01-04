<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDesporto extends Model
{
    use HasFactory;

    protected $table = "users_desportos";

    protected $fillable = [
        'user_id',
        'desporto_id',
        'num_inscricoes',
    ];
}
