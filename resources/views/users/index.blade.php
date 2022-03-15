@extends('plantilla.plantilla')
@section('titulo','Usuarios')
@section('contenido')

<div class="container" style="margin-top: 150px">
    <div class="row">
        <div class="col-12">
            <h1>REPORTE DE USUARIOS</h1>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo Electronico</th>
                            <th>Roles</th>

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
                            </tr>

                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>