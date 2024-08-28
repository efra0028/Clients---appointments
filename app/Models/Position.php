<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    // Especifica los atributos que se pueden asignar en masa
    protected $fillable = [
        'job',
        'description',
    ];
}
