<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'descripcion',
    ];
    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
