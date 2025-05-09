<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barrack extends Model
{
    use HasFactory;

    protected $table = 'barracks'; 
    protected $fillable = ['name', 'location'];
}
