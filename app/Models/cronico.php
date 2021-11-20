<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cronico extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table ='lista_cronicos_vcp';

}
