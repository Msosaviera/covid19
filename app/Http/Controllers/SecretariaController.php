<?php

namespace App\Http\Controllers;

use App\Secretaria;
use App\User;
use Illuminate\Http\Request;

class SecretariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secretarias = Secretaria::all();

        return view('secretaria.index')->with('secretarias', $secretarias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::all();
        return view('secretaria.create')->with('usuarios',$usuarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $secretaria = new Secretaria();

        $secretaria->nombre = $request->nombre;
        $secretaria->appaterno = $request->appaterno;
        $secretaria->apmaterno = $request->apmaterno;
        $secretaria->email = $request->email;
        $secretaria->fechanacimiento = $request->fechanacimiento;
        $secretaria->carnetidentidad = $request->carnetidentidad;
        $secretaria->telefono = $request->telefono;
        $secretaria->direccion = $request->direccion;
        $secretaria->usuario_id = $request->usuario;

        $secretaria->save();

        return redirect()->route('secretaria.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function show(Secretaria $secretaria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function edit(Secretaria $secretaria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Secretaria $secretaria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Secretaria $secretaria)
    {
        //
    }
}
