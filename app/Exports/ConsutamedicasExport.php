<?php

namespace App\Exports;

use App\Consultamedica;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ConsutamedicasExport implements  FromView
{
   
    public function view(): View
    {
        $consultamedicas = Consultamedica::join("users","consultamedicas.usuario_id","=","users.id")
        ->join("citamedicas","consultamedicas.cita_id","=","citamedicas.id")
        ->join("pacientes","citamedicas.paciente_id","=","pacientes.id")
        
        ->select('consultamedicas.*', 'users.id as id_user', 'users.name as name', 'citamedicas.id as id_citamedicas','pacientes.nombre as nombre')
        ->get();
        return view('exports.consultamedica', ['consultamedicas'=> $consultamedicas]);
    }
}
