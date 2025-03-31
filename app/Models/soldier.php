<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soldier extends Model
{
    use HasFactory;

    protected $table = 'soldiers';

    protected $fillable = [
        'name',
        'rank',
        'army_corps_id',
        'barrack_id',
        'company_id',
    ];

 // Relación 1:N inversa (Un Soldado pertenece a un ArmyCorps)
 public function armyCorp()
 {
     return $this->belongsTo(ArmyCorp::class, 'army_corps_id');
 }

 // Relación 1:N inversa (Un Soldado pertenece a un Cuartel)
 public function barrack()
 {
     return $this->belongsTo(barrack::class, 'barrack_id');
 }

 // Relación 1:N inversa (Un Soldado pertenece a una Compañía)
 public function company()
 {
     return $this->belongsTo(Companie::class, 'company_id');
 }

 // Relación N:M (Un Soldado puede realizar muchos Servicios y viceversa)
 public function service()
 {
     return $this->belongsToMany(service::class, 'soldier_service', 'soldier_id', 'service_id')->withPivot('date');
 }
}