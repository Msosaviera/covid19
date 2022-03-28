<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Consultamedica;
use Illuminate\Database\Eloquent\SoftDeletes;


class Recetamedica extends Model
{
    protected $guarded = [];
    use SoftDeletes;

    public function consultamedica()
    {
        return $this->belongsTo(Consultamedica::class);
    }
    
}
