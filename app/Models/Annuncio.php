<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annuncio extends Model
{
    use HasFactory;

    protected $table = 'annunci';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dettagli()
    {
        return $this->hasOne(Dettaglio::class);
    }

    public function modelli()
    {
        return $this->belongsTo(Modello::class);
    }

    public function comuni()
    {
        return $this->belongsTo(Comune::class);
    }

    public function immagini() {
        return $this->hasMany(Immagine::class);
    }
}
