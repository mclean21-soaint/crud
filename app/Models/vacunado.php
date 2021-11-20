<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vacunado extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table ='vacunados_vcp';

}
