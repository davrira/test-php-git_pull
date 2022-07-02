<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculo_gps extends Model
{
    protected $table = 'vehiculo_gps';
    protected $fillable = [
        'id',
        'vehiculo',
        'gps'
    ];
    use HasFactory;
}
