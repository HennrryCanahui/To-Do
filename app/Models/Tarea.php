<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $table = 'tarea';

    protected $fillable = [
        'titulo',
        'escripcion',
        'estado',
        'fecha_cumplimiento',
    ];

    public $timestamps = true;

    // Define any relationships or additional methods here
}
