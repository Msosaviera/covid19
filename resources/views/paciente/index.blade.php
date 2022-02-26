@extends('plantilla.plantilla')
@section('titulo','Pacientes')
@section('contenido')

<div class="container" style="margin-top: 150px">
    <div class="row">
        <div class="col-12">
            <h1>REPORTE DE PACIENTES</h1>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Género</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Carnet de identidad</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Acción</th>
                            <th>Borrrar</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($pacientes as $paciente)
                            <tr>
                                <td>{{ $paciente->id }}</td>
                                <td>{{ $paciente->nombre }}</td>
                                <td>{{ $paciente->appaterno }}</td>
                                <td>{{ $paciente->apmaterno }}</td>
                                <td>{{ $paciente->sexo }}</td>
                                <td>{{ $paciente->fechaNacimiento }}</td>
                                <td>{{ $paciente->carnetIdentidad }}</td>
                                <td>{{ $paciente->telefono }}</td>
                                <td>{{ $paciente->direccion }}</td>
                                
                                <td><a href="{{ route('paciente.edit', $paciente) }}" class="btn btn-primary">Actualizar</a></td>
                                <td>
                                    <form method="POST" action="{{route('paciente.destroy',$paciente->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Borrar</button>

                                    </form>
                                </td>
                                
                                
                                
                            </tr>

                            @endforeach
                    </tbody>
                    <!-- <tfoot>
                        <tr>
                        <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Género</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Carnet de identidad</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Acción</th>
                            <th>Borrrar</th>
                        </tr>
                    </tfoot> -->
                </table>
            </div>
        </div>
    </div>
</div>