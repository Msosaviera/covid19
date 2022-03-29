<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PacientesExport;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pacientes = Paciente::all();

        return view('paciente.index')->with('pacientes',$pacientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = new Paciente();

        $paciente->nombre = $request->nombre;
        $paciente->appaterno = $request->appaterno;
        $paciente->apmaterno = $request->apmaterno;
        $paciente->sexo = $request->sexo;
        $paciente->fechaNacimiento = $request->fechaNacimiento;
        $paciente->carnetIdentidad = $request->carnetIdentidad;
        $paciente->telefono = $request->telefono;
        $paciente->direccion = $request->direccion;

        $paciente->save();

        return redirect()->route('paciente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        $paciente = Paciente::find($paciente->id);
        return view('paciente.edit')->with('paciente',$paciente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        $paciente = Paciente::find($paciente->id);

        $paciente->nombre = $request->nombre;
        $paciente->appaterno = $request->appaterno;
        $paciente->apmaterno = $request->apmaterno;
        $paciente->sexo = $request->sexo;
        $paciente->fechaNacimiento = $request->fechaNacimiento;
        $paciente->carnetIdentidad = $request->carnetIdentidad;
        $paciente->telefono = $request->telefono;
        $paciente->direccion = $request->direccion;

        $paciente->save();

        return redirect()->route('paciente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        $paciente = Paciente::find($paciente->id);

        $paciente->delete($paciente->id);

        return redirect()->route('paciente.index');
    }
    public function excelpaciente()
    {
        return Excel::download(new PacientesExport,'pacientes.xlsx');
    }
}
