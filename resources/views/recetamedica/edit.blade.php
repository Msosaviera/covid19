@extends('plantilla.plantilla')
@section('titulo','Receta Medica')
@section('contenido')

<section style="margin-top: 150px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('recetamedica.update',$recetamedica->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Laboratorio</label>
                        <input type="text" name="laboratorio" class="form-control" placeholder="Ingrese los laboratorios requeridos" value="{{$recetamedica->laboratorio}}" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Indicaciones</label>
                        <textarea name="indicaciones"  cols="30" rows="10" class="form-control" required> {{$recetamedica->indicaciones}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Datos de Consulta </label><br>
                                <label>Numero Consulta:   </label><input  value="{{$consultamedicas->id}}" disabled /><br>
                                <label>Medico: </label><input value="{{$pacientes->nombre}}" disabled /><br>
                                <label>Paciente: </label><input value="{{$users->name}}" disabled /><br>
                                <input type="hidden" name="consulta" value="{{$consultamedicas->id}}">
                    </div>


                    <button type="submit" class="btn btn-primary">Registrar Receta</button>
                </form>
            </div>
        </div>
    </div>
</section>