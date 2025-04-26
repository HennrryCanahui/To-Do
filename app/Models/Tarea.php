<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tarea extends Model
{
    use HasFactory;
    protected $table = 'tarea';

    protected $fillable = [
        'titulo',
        'descripcion',
        'estado',
        'fecha_cumplimiento',
    ];

    public $timestamps = true;

    // Define any relationships or additional methods here
}
