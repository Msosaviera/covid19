@extends('plantilla.plantilla')
@section('titulo','Consulta Medica')
@section('contenido')

<div class="container" style="margin-top: 150px">
    <div class="row">
        <div class="col-12">
            <h1>REPORTE DE CONSULTAS MÉDICAS</h1>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Número de Consulta</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Molestas Previas</th>
                            <th>Secretaria</th>
                            <th>Médico</th>
                            <th>Receta|</th>
                            <th>Cita</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($consultamedicas as $consultamedica)
                            <tr>
                                <td>{{ $consultamedica->id }}</td>
                                <td>{{ $consultamedica->numCita }}</td>
                                <td>{{ $consultamedica->fecha }}</td>
                                <td>{{ $consultamedica->hora }}</td>
                                <td>{{ $consultamedica->molestiasPrevias}}</td>
                                <td>{{ $consultamedica->secretaria }}</td>
                                <td>{{ $consultamedica->medico }}</td>
                                <td>{{ $consultamedica->receta }}</td>
                                <td>{{ $consultamedica->cita }}</td>
                                
                            </tr>

                            @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                        <<th>ID</th>
                            <th>Número de Consulta</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Molestas Previas</th>
                            <th>Secretaria</th>
                            <th>Médico</th>
                            <th>Receta|</th>
                            <th>Cita</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>