<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Requests\userRequest;

use App\User;

class UserController extends Controller
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
        $users = User::all();
        return view('users.index')->with('users', $users);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $roles=Role::all()->pluck('name','id');
        return view('users.create', compact('roles'));   

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(userRequest $request)

    {
        $rol_elegido=Role::find($request->input('rol'));
        $user=User::create($request->all()); 
        $user->assignRole($rol_elegido);
        return redirect()->route('user.index'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {


        $roles=Role::all()->pluck('name','id');
        $rol_activo= $user->roles->first()->id;
        return view('users.edit', compact('user','roles','rol_activo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(userRequest $request, User $user)
    {
        $rol_elegido=Role::find($request->input('rol'));
        $user->update($request->all());
        $user->syncRoles($rol_elegido);

        return redirect()->route('user.index'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('user.index'); 
    }
}
