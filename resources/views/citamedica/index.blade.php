@extends('plantilla.plantilla')
@section('titulo','Citas Médicas')
@section('contenido')

<div class="container" style="margin-top: 150px">
    <div class="row">
        <div class="col-12">
            <h1>REPORTE DE CITAS MÉDICAS</h1>
            <form method="GET" action="{{ route('excel') }}">
            @csrf
            
                <button type="submit"  class="btn btn-success">Exportar Excel</button>
            </form>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fecha Cita</th>
                            <th>Hora Cita</th>
                            <th>Molestas Previas</th>
                            <th>Paciente</th>
                            <th>Médico</th>
                            <th>Accion</th>
                            <th>Borrrar</th>
                            <th>Crear</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($citamedicas as $citamedica)
                            <tr>
                                <td>{{ $citamedica->id }}</td>
                                <td>{{ $citamedica->fechaCita }}</td>
                                <td>{{ $citamedica->horaCita }}</td>
                                <td>{{ $citamedica->molestiasPrevias}}</td>
                                <td>{{ $citamedica->nombre }}</td>
                                <td>{{ $citamedica->name }}</td>
                                
                                <td><a href="{{ route('citamedica.edit', $citamedica) }}" class="btn btn-primary">Actualizar</a></td>
                               
                               
                                <td>
                                    <form method="POST" action="{{route('citamedica.destroy',$citamedica->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Borrar</button>

                                    </form>
                                </td>
                                @role('medico|administrador')
                                <td><a href="{{ route('registroconsulta', $citamedica->id) }}" class="btn btn-dark">Consulta</a></td>
                                @else
                            
                            <td><p>No tiene permiso de acceso.</p></td>
                            @endrole
                                
                            </tr>

                            @endforeach
                    </tbody>
                    <!-- <tfoot>
                        <tr>
                        
                            <<th>ID</th>
                            <th>Fecha Cita</th>
                            <th>Hora Cita</th>
                            <th>Molestas Previas</th>
                            <th>Paciente</th>
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