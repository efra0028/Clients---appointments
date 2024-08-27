<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    // Definir los atributos que se pueden asignar en masa (mass assignable)
    protected $fillable = [
        'client_id',
        'appointment_date',
        'address',
        'description'
    ];

    // Definir la relación con el modelo Client
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
