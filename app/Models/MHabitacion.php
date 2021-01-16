<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MHabitacion extends Model
{
    protected $table='habitacion';

    protected $primaryKey='Numero';
    
    use HasFactory;
}
