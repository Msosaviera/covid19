@extends('plantilla.plantilla')
@section('titulo','Usuarios')
@section('contenido')

<div class="container" style="margin-top: 150px">
    <div class="row">
        <div class="col-12">
            <h1>GESTIÓN DE USUARIOS</h1>             

            <a class="btn btn-primary" href="{{ route('user.create') }}">Crear</a><br>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo Electronico</th>
                            <th>Roles</th>

                            <th>Editar</th>
                            <th>Eliminar</th>

                            <th>Acciones</th>


                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                @forelse($user->roles as $role)                                    
                                    <span>{{$role->name}}</span>
                                </td>
                                @empty
                                <td>
                                    <span>NO ASIGNADO</span>
                                @endforelse
                                </td>

                                <td> 
                                <a class="btn btn-success" href="{{ route('user.edit',$user->id) }}">Editar</a>  
                                </td>
                                <td>                                 
                                    <form method="POST" action="{{route('user.destroy',$user->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>