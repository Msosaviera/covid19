@extends('plantilla.plantilla')
@section('titulo','Secretarias')
@section('contenido')

<div class="container" style="margin-top: 150px">
    <div class="row">
        <div class="col-12">
            <h1>REPORTE DE SECRETARIAS</h1>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Correo Electronico</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Carnet Identidad</th>
                            <th>Telefono</th>
                            <th>Dirección</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($secretarias as $secretaria)
                            <tr>
                                <td>{{ $secretaria->id }}</td>
                                <td>{{ $secretaria->nombre }}</td>
                                <td>{{ $secretaria->appaterno }}</td>
                                <td>{{ $secretaria->apmaterno }}</td>
                                <td>{{ $secretaria->email }}</td>
                                <td>{{ $secretaria->fechanacimiento }}</td>
                                <td>{{ $secretaria->carnetidentidad }}</td>
                                <td>{{ $secretaria->telefono }}</td>
                                <td>{{ $secretaria->direccion}}</td>
                            </tr>

                            @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                        <th>ID</th>
                            <th>nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Correo Electronico</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Carnet Identidad</th>
                            <th>Telefono</th>
                            <th>Dirección</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>