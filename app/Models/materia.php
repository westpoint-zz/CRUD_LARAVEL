<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;


    protected $table = 'materia';

    
    protected $fillable = [
        'name',
        'description',
        'creditos',
        'tipo',
        'valor_hora',
        'estado',
    ];

    
}
