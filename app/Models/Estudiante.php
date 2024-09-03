<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'ci',
        'fecha_nacimiento',
        'email',
        'telefono',
        'ciudad',
        'pais',
        'genero',
    ];
    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}

