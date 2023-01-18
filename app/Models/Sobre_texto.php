<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sobre_texto extends Model
{
    use HasFactory;

    protected $table = 'sobre_textos';

    protected $fillable = [
        'texto'
    ];
}
