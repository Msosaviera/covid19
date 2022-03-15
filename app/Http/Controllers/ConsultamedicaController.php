<?php

namespace App\Http\Controllers;

use App\Consultamedica;
use App\Citamedica;
use App\User;
use App\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ConsutamedicasExport;

class ConsultamedicaController extends Controller
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
        //$consultamedicas = Consultamedica::all();
        $consultamedicas = Consultamedica::join("users","consultamedicas.usuario_id","=","users.id")
        ->join("citamedicas","consultamedicas.cita_id","=","citamedicas.id")
        ->join("pacientes","citamedicas.paciente_id","=","pacientes.id")
        
        ->select('consultamedicas.*', 'users.id as id_user', 'users.name as name', 'citamedicas.id as id_citamedicas','pacientes.nombre as nombre')
        ->get();

        return view('consultamedica.index')->with('consultamedicas', $consultamedicas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $roles = User::whereHas('roles', function($query){
            $query->where('name','=','medico');
        })->get();
        $citamedicas = Citamedica::all();
        $users = User::all();

        return view('consultamedica.create')
        ->with('users',$users)
        ->with('citamedicas',$citamedicas)
        ->with('roles',$roles);
    }

    public function consulta($id){

        
       //$citamedicas = Citamedica::with('user')->get();
       $citamedicas = Citamedica::join("users","citamedicas.usuario_id","=","users.id")
       ->where('citamedicas.id','=',$id)
       //->addSelect('pacientes.id as id_pacientes', 'users.id as id_users')
       ->join("pacientes","citamedicas.paciente_id","=","pacientes.id")
       //->where('users.estado','=',1)
       ->select('citamedicas.*', 'users.id as id_user', 'users.name as name', 'pacientes.id as id_paciente', 'pacientes.nombre as nombre')
       ->get();

       $roles = User::whereHas('roles', function($query){
        $query->where('name','=','medico');
    })->get();
    $users = User::all();

    return view('consultamedica.create')
    ->with('users',$users)
    ->with('citamedicas',$citamedicas)
    ->with('roles',$roles);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
        $consultamedica = new Consultamedica();

        
        $consultamedica->fecha = $request->fecha;
        $consultamedica->hora = $request->hora;
        $consultamedica->detalles = $request->detalles;
        $consultamedica->cita_id = $request->cita;
        $consultamedica->usuario_id = $request->usuario;
        $consultamedica->creadopor = Auth::id();
        

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
        $roles = User::whereHas('roles', function($query){
            $query->where('name','=','medico');
        })->get();
        $consultamedica = Consultamedica::find($consultamedica->id);
        // dd($consultamedica);
 
         $citamedicas = Citamedica::find($consultamedica->cita_id);
         $users = User::find($citamedicas->usuario_id);
         $pacientes = Paciente::find($citamedicas->paciente_id);
         //dd($citamedicas);
         //dd($pacientes);
         //dd($users);
         //dd($roles);
         
         //$_POST['fechaCita']= $citamedica->fechaCita;
         return view('consultamedica.edit')->with('consultamedica',$consultamedica)
         ->with('users',$users)
         ->with('pacientes',$pacientes)
         ->with('citamedicas',$citamedicas)
         ->with('roles',$roles);
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
        $consultamedica = Consultamedica::find($consultamedica->id);

        
        $consultamedica->fecha = $request->fecha;
        $consultamedica->hora = $request->hora;
        $consultamedica->detalles = $request->detalles;
        $consultamedica->cita_id = $request->cita;
        $consultamedica->usuario_id = $request->usuario;
        $consultamedica->creadopor = Auth::id();
        

        $consultamedica->save();

        return redirect()->route('consultamedica.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consultamedica  $consultamedica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultamedica $consultamedica)
    {
        $consultamedica = Consultamedica::find($consultamedica->id);

        $consultamedica->delete($consultamedica->id);

        return redirect()->route('consultamedica.index');
    }
    public function excelconsulta()
    {
        return Excel::download(new ConsutamedicasExport,'consultasmedicas.xlsx');
    }
}
