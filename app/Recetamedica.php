<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Consultamedica;
use SoftDeletes;

class Recetamedica extends Model
{
    protected $guarded = [];

    public function consultamedica()
    {
        return $this->belongsTo(Consultamedica::class);
    }
    
}
