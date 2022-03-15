@extends('plantilla.plantilla')
@section('titulo','Recetas')
@section('contenido')

<div class="container" style="margin-top: 150px">
    <div class="row">
        <div class="col-12">
            <h1>REPORTE DE RECETAS MEDICAS</h1><br>
            <form method="GET" action="{{ route('excelreceta') }}">
            @csrf
            
                <button type="submit"  class="btn btn-success">Exportar Excel</button>
            </form>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Detalle Consulta</th>
                            <th>Indicaciones</th>
                            <th>laboratorio</th>
                            <th>N° de consulta</th>
                            <th>Paciente</th>
                            <th>Medico</th>
                            <!-- <th>Fecha</th> -->
                            <th>Accion</th>
                            <th>Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($recetamedicas as $recetamedica)
                            <tr>
                                <td>{{ $recetamedica->id }}</td>
                                <td>{{ $recetamedica->detalles }}</td>
                                <td>{{ $recetamedica->indicaciones }}</td>
                                <td>{{ $recetamedica->laboratorio }}</td>
                                <td>{{ $recetamedica->id_consulta }}</td>
                                <td>{{ $recetamedica->nombre }}</td>
                                <td>{{ $recetamedica->name }}</td>
                                <!-- <td>{{ date('d-M-y H:m', strtotime($recetamedica->created_at)) }}</td> -->
                                @role('medico|administrador')
                                <td><a href="{{ route('recetamedica.edit', $recetamedica) }}" class="btn btn-primary">Actualizar</a></td>
                                
                                <td>
                                    <form method="POST" action="{{route('recetamedica.destroy',$recetamedica->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Borrar</button>

                                    </form>
                                </td>
                                
                            </tr>
                            @else
                                <td><p>No tiene permiso de acceso.</p></td>
                                @endrole
                            @endforeach
                    </tbody>
                    <!-- <tfoot>
                        <tr>
                        <th>ID</th>
                            <th>Indicaciones</th>
                            <th>laboratorio</th>
                            <th>N° de consulta</th>
                            <th>Accion</th>
                            <th>Borrar</th>
                        </tr>
                    </tfoot> -->
                </table>
            </div>
        </div>
    </div>
</div>