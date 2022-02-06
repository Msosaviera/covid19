@extends('plantilla.plantilla')
@section('titulo','Recetas')
@section('contenido')

<div class="container" style="margin-top: 150px">
    <div class="row">
        <div class="col-12">
            <h1>REPORTE DE RECETAS MEDICAS</h1>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>laboratorio</th>
                            <th>Indicaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($recetas as $receta)
                            <tr>
                                <td>{{ $receta->id }}</td>
                                <td>{{ $receta->laboratorio }}</td>
                                <td>{{ $receta->indicaciones }}</td>
                            </tr>

                            @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>laboratorio</th>
                            <th>Indicaciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>