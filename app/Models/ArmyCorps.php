<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArmyCorps extends Model
{
    use HasFactory;

    protected $table = 'army_corps'; // Asegura que Laravel use la tabla correcta
    protected $fillable = ['id', 'denomination']; // Habilita la asignación masiva
}
