@extends('plantilla.plantilla')
@section('titulo','Medicos')
@section('contenido')

<div class="container" style="margin-top: 150px">
    <div class="row">
        <div class="col-12">
            <h1>REPORTE DE MEDICOS</h1>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Carnet Identidad</th>
                            <th>Telefono</th>
                            <th>Especialidad</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($medicos as $medico)
                            <tr>
                                <td>{{ $medico->id }}</td>
                                <td>{{ $medico->nombre }}</td>
                                <td>{{ $medico->appaterno }}</td>
                                <td>{{ $medico->apmaterno }}</td>
                                <td>{{ $medico->carnetidentidad }}</td>
                                <td>{{ $medico->telefono }}</td>
                                <td>{{ $medico->especialidad}}</td>
                            </tr>

                            @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Carnet Identidad</th>
                            <th>Telefono</th>
                            <th>Especialidad</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>