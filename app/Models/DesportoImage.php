<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesportoImage extends Model
{
    use HasFactory;

    protected $table = 'desporto_images';

    protected $fillable = [
        'image',
    ];
    
}
