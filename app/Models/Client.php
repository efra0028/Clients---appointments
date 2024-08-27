<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // Definir los atributos que se pueden asignar en masa (mass assignable)
    protected $fillable = [
        'name',
        'ci',
        'email',
        'phone',
        'address',
        'city',
        'country',
        'birth_date',
        'gender',
    ];

    // Definir la relación con el modelo Appointment
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
