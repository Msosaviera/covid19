<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Paciente;
use Illuminate\Database\Eloquent\SoftDeletes;


class Citamedica extends Model
{
    
    use SoftDeletes;
    protected $guarded = [];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

  


}
