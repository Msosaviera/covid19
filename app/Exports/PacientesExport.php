<?php

namespace App\Exports;

use App\Paciente;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PacientesExport implements FromView
{
   
    public function view(): View
    {
        $pacientes = Paciente::all();
        return view('exports.paciente', ['pacientes'=> $pacientes]);
    
    }
}
