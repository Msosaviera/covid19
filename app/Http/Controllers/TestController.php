<?php

namespace App\Http\Controllers;

use App\Test;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    //Controlador autenticado
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $Tests = Test::listarUsuarios();
        return view('test.index',compact('Tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('test.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Test = new Test();
        $Test->temperatura  = $request->temperatura;
        $Test->tos          = $request->tos;
        $Test->respirar     = $request->respirar;
        $Test->salud        = $request->salud;
        $Test->edad         = $request->edad;
        $Test->ci           = $request->ci;
        $Test->correo       = $request->correo;
        $Test->telefono     = $request->telefono;
        $Test->direccion    = $request->direccion;
        $Test->user_id      = Auth::id();

        $Test->save();
        return redirect()->route('test.create')->with('mensaje', 'Registro Guardado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $Tests = Test::detalleTest($id);
        return view('test.show', compact('Tests'));
    }

}
