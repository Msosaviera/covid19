<?php

namespace App\Http\Controllers;

use App\Consultamedica;
use App\Recetamedica;
// use App\Medico;
// use App\Secretaria;
use App\Citamedica;
use Illuminate\Http\Request;

class ConsultamedicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultamedicas = Consultamedica::all();

        return view('consultamedica.index')->with('consultamedicas', $consultamedicas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recetamedicas = Recetamedica::all();
        // $medicos = Medico::all();
        // $secretarias = Secretaria::all();
        $citamedicas = Citamedica::all();
        return view('consultamedica.create')->with('recetamedicas',$recetamedicas)->with('medicos',$medicos)->with('secretarias',$secretarias)->with('citamedicas',$citamedicas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consultamedica = new Consultamedica();

        $consultamedica->numCita = $request->numCita;
        $consultamedica->fecha = $request->fecha;
        $consultamedica->hora = $request->hora;
        $consultamedica->molestiasPrevias = $request->molestiasPrevias;
        // $consultamedica->medico_id = $request->medico;
        // $consultamedica->secretaria_id = $request->secretaria;
        $consultamedica->receta_id = $request->receta;
        $consultamedica->cita_id = $request->cita;
        

        $consultamedica->save();

        return redirect()->route('consultamedica.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consultamedica  $consultamedica
     * @return \Illuminate\Http\Response
     */
    public function show(Consultamedica $consultamedica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consultamedica  $consultamedica
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultamedica $consultamedica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consultamedica  $consultamedica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultamedica $consultamedica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consultamedica  $consultamedica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultamedica $consultamedica)
    {
        //
    }
}
