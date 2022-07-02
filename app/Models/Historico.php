<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    protected $table = 'historico_vehiculos_externo';
    protected $fillable = [
        'id_vehiculo_gps',
        'id_suscripcion',
        'status',
        'fecha',
        'id_persona',
        'usr_cre',
        'usr_act'
    ];

    use HasFactory;
}
