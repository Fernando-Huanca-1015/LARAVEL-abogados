<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    protected $table = 'consultas';
    protected $fillable = [
        'nombre',
        'ciudad',
        'edad',
        'telefono',
        'email',
        'especialidad',
        'mensaje',
        'consulta'
    ];
}
