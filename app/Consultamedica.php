<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Citamedica;
use Illuminate\Database\Eloquent\SoftDeletes;


class Consultamedica extends Model
{
    
    protected $guarded = [];
    use SoftDeletes;
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
    public function citamedica()
    {
        return $this->belongsTo(Citamedica::class);
    }
   
}
