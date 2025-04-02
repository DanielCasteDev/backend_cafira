<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'telefono',
        'fecha_nacimiento'
    ];

    protected $casts = [
        'fecha_nacimiento' => 'date:Y-m-d' 
    ];
}