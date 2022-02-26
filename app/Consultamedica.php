<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Citamedica;
use SoftDeletes;

class Consultamedica extends Model
{
    
    protected $guarded = [];
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
    public function citamedica()
    {
        return $this->belongsTo(Citamedica::class);
    }
   
}
