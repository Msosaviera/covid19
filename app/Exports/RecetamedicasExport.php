<?php

namespace App\Exports;

use App\Recetamedica;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class RecetamedicasExport implements FromView
{
   
    public function view(): View
    
    {
        $recetamedicas = Recetamedica::join("consultamedicas","recetamedicas.consulta_id","=","consultamedicas.id")
        ->join("citamedicas","consultamedicas.id","=","citamedicas.id")
        ->join("users","citamedicas.usuario_id","=","users.id")
        ->join("pacientes","citamedicas.paciente_id","=","pacientes.id")
        
       
        ->select('recetamedicas.*', 'consultamedicas.id as id_consulta', 'consultamedicas.detalles', 'users.name', 'pacientes.nombre')
        ->get();
        return view('exports.receta', ['recetamedicas'=> $recetamedicas]);
    }
}
