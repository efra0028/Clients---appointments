<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    // Especifica los atributos que se pueden asignar en masa
    protected $fillable = [
        'name',
        'location',
    ];
}
