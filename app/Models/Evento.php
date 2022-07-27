<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'detalle',
        'asistentes',
        'fecha',
        'hora_inicio',
        'hora_fin',
        'usuario_id',
        'laboratorio_id',
    ];

    public function laboratorio()
    {
        return $this->belongsTo(Laboratorio::class);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
