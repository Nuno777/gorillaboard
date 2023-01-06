<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sobre extends Model
{
    use HasFactory;
    protected $table = "sobre";

    protected $fillable = [
        'img',
        'featured',
    ];
}
