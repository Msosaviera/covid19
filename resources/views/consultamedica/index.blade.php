@extends('plantilla.plantilla')
@section('titulo','Consulta Medica')
@section('contenido')

<div class="container" style="margin-top: 150px">
    <div class="row">
        <div class="col-12">
            <h1>REPORTE DE CONSULTAS MÉDICAS</h1><br>
            <form method="GET" action="{{ route('excelconsulta') }}">
            @csrf
            
                <button type="submit"  class="btn btn-success">Exportar Excel</button>
            </form>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Detalle</th>
                            <th>Paciente</th>
                            <th>Cita</th>
                            <th>Médico</th>
                            <th>Accion</th>
                            <th>Borrar</th>
                            <th>Crear</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($consultamedicas as $consultamedica)
                            <tr>
                                <td>{{ $consultamedica->id }}</td>
                                <td>{{ $consultamedica->fecha }}</td>
                                <td>{{ $consultamedica->hora }}</td>
                                <td>{{ $consultamedica->detalles}}</td>
                                <td>{{ $consultamedica->nombre}}</td>
                                <td>{{ $consultamedica->id_citamedicas }}</td>
                                <td>{{ $consultamedica->name }}</td>
                                @role('medico|administrador')
                                <td><a href="{{ route('consultamedica.edit', $consultamedica) }}" class="btn btn-primary">Actualizar</a></td>
                                
                                <td>
                                    <form method="POST" action="{{route('consultamedica.destroy',$consultamedica->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Borrar</button>

                                    </form>
                                </td>
                                <td><a href="{{ route('recetamedica', $consultamedica->id) }}" class="btn btn-dark">Receta</a></td>
                            </tr>
                            @else
                                <td><p>No tiene permiso de acceso.</p></td>
                                @endrole

                            @endforeach
                    </tbody>
                    <!-- <tfoot>
                        <tr>
                        <th>ID</th>
                            
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>detalles</th>
                            <th>Paciente</th>
                            <th>Cita</th>
                            <th>Médico</th>
                            <th>Accion</th>
                            <th>Borrrar</th>
                            <th>Crear</th>
                        </tr>
                    </tfoot> -->
                </table>
            </div>
        </div>
    </div>
</div>