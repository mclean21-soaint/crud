<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class condicion_especial extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table ='condiciones_especiales_vcp';

    

//    protected $primaryKey = "id";
}
