<?php

namespace App\Exports;

use App\Citamedica;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CitamedicasExport implements FromView
{

    public function view(): View
    {
        $citamedicas = Citamedica::join("users","citamedicas.usuario_id","=","users.id")
        
        ->join("pacientes","citamedicas.paciente_id","=","pacientes.id")
        
        ->select('citamedicas.*', 'users.id as id_user', 'users.name as name', 'pacientes.id as id_paciente', 'pacientes.nombre as nombre')
        ->get();
        
        return view('exports.citamedica', ['citamedicas'=> $citamedicas]);
    }
}
