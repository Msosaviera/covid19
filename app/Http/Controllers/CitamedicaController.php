<?php

namespace App\Http\Controllers;

use App\Citamedica;
use App\Paciente;
//use App\Medico;
use App\Secretaria;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class CitamedicaController extends Controller
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
        //$citamedicas = Citamedica::with('user')->get();
        $citamedicas = Citamedica::join("users","citamedicas.usuario_id","=","users.id")
        //->addSelect('pacientes.id as id_pacientes', 'users.id as id_users')
        ->join("pacientes","citamedicas.paciente_id","=","pacientes.id")
        //->where('users.estado','=',1)
        ->select('citamedicas.*', 'users.id as id_user', 'users.name as name', 'pacientes.id as id_paciente', 'pacientes.nombre as nombre')
        ->get();
        //dd($citamedicas);

        return view('citamedica.index')->with('citamedicas', $citamedicas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$roles = ::with('roles')->where('name','=','medico')->get();
        $roles = User::whereHas('roles', function($query){
            $query->where('name','=','medico');
        })->get();

        //dd($roles);
        $pacientes = Paciente::all();
       // $medicos = Medico::all();
        $secretarias = Secretaria::all();
        $users = User::all();
        return view('citamedica.create')
        ->with('pacientes',$pacientes)
        ->with('secretarias',$secretarias)
        ->with('users',$users)
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
        $citamedica = new Citamedica();

        $citamedica->fechaCita = $request->fechaCita;
        $citamedica->horaCita = $request->horaCita;
        $citamedica->molestiasPrevias = $request->molestiasPrevias;
        $citamedica->paciente_id = $request->paciente;
        $citamedica->usuario_id = $request->usuario;
        $citamedica->creadopor = Auth::id();
        // $citamedica->secretaria_id = $request->secretaria;
        

        $citamedica->save();

        return redirect()->route('citamedica.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Citamedica  $citamedica
     * @return \Illuminate\Http\Response
     */
    public function show(Citamedica $citamedica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Citamedica  $citamedica
     * @return \Illuminate\Http\Response
     */
    public function edit(Citamedica $citamedica)
    {
        
        $citamedica = Citamedica::find($citamedica->id);
       // dd($citamedica);
       $users = User::all();
        $pacientes = Paciente::all();
        $roles = User::whereHas('roles', function($query){
            $query->where('name','=','medico');
        })->get();
        //$_POST['fechaCita']= $citamedica->fechaCita;
        return view('citamedica.edit')->with('citamedica',$citamedica)->with('pacientes',$pacientes)->with('users',$users)->with('roles',$roles);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Citamedica  $citamedica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Citamedica $citamedica)
    {
        //dd($request);

        $citamedica = Citamedica::find($citamedica->id);

        $citamedica->fechaCita = $request->fechaCita;
        $citamedica->horaCita = $request->horaCita;
        $citamedica->molestiasPrevias = $request->molestiasPrevias;
        $citamedica->paciente_id = $request->paciente;
        $citamedica->usuario_id = $request->usuario;
        $citamedica->creadopor = Auth::id();

        $citamedica->save();

        return redirect()->route('citamedica.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Citamedica  $citamedica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citamedica $citamedica)
    {
        $citamedica = Citamedica::find($citamedica->id);

        $citamedica->delete($citamedica->id);

        return redirect()->route('citamedica.index');
    }

    public function excel()
    {
         $citamedicas = Citamedica::join("users","citamedicas.usuario_id","=","users.id")
         //->addSelect('pacientes.id as id_pacientes', 'users.id as id_users')
         ->join("pacientes","citamedicas.paciente_id","=","pacientes.id")
         //->where('users.estado','=',1)
         ->select('citamedicas.*', 'users.id as id_user', 'users.name as name', 'pacientes.id as id_paciente', 'pacientes.nombre as nombre')
         ->get();
         //dd($citamedicas);
         
        //  $customer_array[] = array('id', 'fecha', 'hora', 'molestiasPrevias', 'Paciente', 'Medico');
        //  foreach($citamedicas as $cita)
        //         {
        //             $customer_array[] = array(
        //             'id'  => $cita->id,
        //             'fecha'   => $cita->fecha,
        //             'hora'    => $cita->hora,
        //             'molestiasPrevias'  => $cita->molestiasPrevias,
        //             'Paciente'   => $cita->nombre,
        //             'Medico'   => $cita->name
        //             );
        //         }
                //dd($customer_array);
                // Excel::download('Citas', function($excel) use ($customer_array){
                // $excel->setTitle('Citas');
                // $excel->sheet('Citas', function($sheet) use ($customer_array){
                // $sheet->fromArray($customer_array, null, 'A1', false, false);
                // });
                // })->download('xlsx');

                //$export = new ArchivoPrimarioExport($data);

                return Excel::download($citamedicas, 'Citas'.'.xlsx');
    }
}
