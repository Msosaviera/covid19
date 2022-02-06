<?php

namespace App\Http\Controllers;

use App\Recetamedica;
use Illuminate\Http\Request;

class RecetamedicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recetas = RecetaMedica::all();

        return view('recetamedica.index')->with('recetas',$recetas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recetamedica.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $receta = new RecetaMedica();

        $receta->indicaciones = $request->indicaciones;
        $receta->laboratorio = $request->laboratorio;

        $receta->save();

        return redirect()->route('recetamedica.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recetamedica  $recetamedica
     * @return \Illuminate\Http\Response
     */
    public function show(Recetamedica $recetamedica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recetamedica  $recetamedica
     * @return \Illuminate\Http\Response
     */
    public function edit(Recetamedica $recetamedica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recetamedica  $recetamedica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recetamedica $recetamedica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recetamedica  $recetamedica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recetamedica $recetamedica)
    {
        //
    }
}
