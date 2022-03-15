<?php

namespace App\Http\Controllers;

use App\Recetamedica;
use App\Consultamedica;
use App\Citamedica;
use App\User;
use App\Paciente;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RecetamedicasExport;

class RecetamedicaController extends Controller
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
        $recetamedicas = Recetamedica::join("consultamedicas","recetamedicas.consulta_id","=","consultamedicas.id")
        ->join("citamedicas","consultamedicas.id","=","citamedicas.id")
        ->join("users","citamedicas.usuario_id","=","users.id")
        ->join("pacientes","citamedicas.paciente_id","=","pacientes.id")
        
       
        ->select('recetamedicas.*', 'consultamedicas.id as id_consulta', 'consultamedicas.detalles', 'users.name', 'pacientes.nombre')
        ->get();
        

        return view('recetamedica.index')->with('recetamedicas',$recetamedicas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $consultamedicas = Consultamedica::all();
        

        return view('recetamedica.create')
        ->with('consultamedicas',$consultamedicas);
        
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
        $receta->consulta_id = $request->consulta;


        $receta->save();

        return redirect()->route('recetamedica.index');

    }

    public function receta($id)
    {

    //     $consultamedicas = Consultamedica::join("users","consultamedicas.usuario_id","=","users.id")
    //    ->where('consultamedicas.id','=',$id)
    //    ->select('consultamedicas.*', 'users.id as id_user', 'users.name as name')
    //    ->get();

        $roles = User::whereHas('roles', function($query){
         $query->where('name','=','medico');
     })->get();
    // $users = User::all();
    
    $consultamedicas = Consultamedica::find($id);
    $citamedicas = Citamedica::find($consultamedicas->cita_id);
    $users = User::find($citamedicas->usuario_id);
    $pacientes = Paciente::find($citamedicas->paciente_id);

    //dd($consultamedicas);
    //dd($citamedicas);
    //dd($users);
    //dd($pacientes);

    return view('recetamedica.create')
    ->with('consultamedicas',$consultamedicas)
    ->with('citamedicas',$citamedicas)
    ->with('users',$users)
    ->with('pacientes',$pacientes)
    ->with('roles',$roles);

    //     $recetamedicas = Recetamedica::join("consultamedicas","recetamedicas.consulta_id","=","consultamedicas.id")
    //    ->where('consultamedicas.id','=',$id)
       
    //    //->join("pacientes","citamedicas.paciente_id","=","pacientes.id")
       
    //    ->select('consultamedicas.*')
    //    ->get();

      

    //      return view('recetamedica.create')
    
    //     ->with('recetamedicas',$recetamedicas);
    
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
        // $recetamedica = Recetamedica::find($recetamedica->id);

        // $consultamedicas = Consultamedica::all();
        // return view('recetamedica.edit')
        // ->with('recetamedicas',$recetamedica)
        // ->with('consultamedicas',$consultamedicas);
    $recetamedica = Recetamedica::find($recetamedica->id);
    $consultamedicas = Consultamedica::find($recetamedica->consulta_id);
    $citamedicas = Citamedica::find($consultamedicas->cita_id);
    $users = User::find($citamedicas->usuario_id);
    $pacientes = Paciente::find($citamedicas->paciente_id);

    return view('recetamedica.edit')
        ->with('recetamedica',$recetamedica)
        ->with('consultamedicas',$consultamedicas)
        ->with('recetamedicas',$recetamedica)
        ->with('users',$users)
        ->with('pacientes',$pacientes);
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
        $recetamedica = RecetaMedica::find($recetamedica->id);
        

        $recetamedica->indicaciones = $request->indicaciones;
        $recetamedica->laboratorio = $request->laboratorio;
        $recetamedica->consulta_id = $request->consulta;


        $recetamedica->save();

        return redirect()->route('recetamedica.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recetamedica  $recetamedica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recetamedica $recetamedica)
    {
        $recetamedica = Recetamedica::find($recetamedica->id);

        $recetamedica->delete($recetamedica->id);

        return redirect()->route('recetamedica.index');
    }
    public function excelreceta()
    {
        return Excel::download(new RecetamedicasExport,'recetas.xlsx');
    }
}
