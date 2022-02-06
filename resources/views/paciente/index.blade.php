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
                            <th>Apelido Paterno</th>
                            <th>Apelido Materno</th>
                            <th>Genero</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Carnet de identidad</th>
                            <th>Telefono</th>
                            <th>Dirección</th>
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
                            </tr>

                            @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apelido Paterno</th>
                            <th>Apelido Materno</th>
                            <th>Genero</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Carnet de identidad</th>
                            <th>Telefono</th>
                            <th>Dirección</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>