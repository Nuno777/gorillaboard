<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class atletas extends Model
{
    use HasFactory;

    protected $table = 'atletas';

    protected $fillable = [
        'nasc_atleta',
        'idade_atleta',
        'email_encarregado_edu',
        'cc_encarregado_edu',
        'tele_encarregado_edu',
        'user_id'
    ];

    public function atletas() {
        return $this->belongsTo(atletas::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
