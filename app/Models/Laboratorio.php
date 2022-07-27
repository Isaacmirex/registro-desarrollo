<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'ubicacion',
        'personal_cargo',
        'descripcion',
        'aforo',
    ];

    public function evento()
    {
        return $this->hasOne(Evento::class);
    }
}
