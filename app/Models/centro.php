<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class centro extends Model
{
    use HasFactory;
    protected $table ='centros_vcp';
    //protected $fillable=['codigo','centro','geolon','geolat','despacho','recepcion','vacunacion','create_at','update_at','provincia','distrito','corregimiento','circuito','codigo_corregimiento','borrado'];
}
