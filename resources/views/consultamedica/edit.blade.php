@extends('plantilla.plantilla')
@section('titulo','Consulta Medica')
@section('contenido')

<section style="margin-top: 150px">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1>EDITAR CONSULTAS MÉDICAS</h1>
                <form method="POST" action="{{ route('consultamedica.update',$consultamedica->id) }}">
                    @csrf
                    @method('PATCH')
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fecha de la consulta</label>
                        <input type="date" name="fecha" class="form-control" placeholder="Ingresa su apellido parterno" value="{{$consultamedica->fecha}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hora de la Cita</label>
                        <input type="time" name="hora" class="form-control" placeholder="Ingresa su apellido parterno" value="{{$consultamedica->hora}}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Detalle consulta</label>
                        <textarea name="detalles"  cols="30" rows="10" class="form-control" required>{{$consultamedica->detalles}}</textarea>
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Médico </label>
                        <select name="usuario" id="">
                        @foreach ($roles as $role)
                                @if($role->id == $role->name)
                                    <option selected value="{{$role->id}}">{{$role->name}}</option>    
                                @else
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Datos de Cita </label><br>
                                <label>Numero Cita: </label><input value="{{$citamedicas->id}}" disabled ><br>
                                <label>Paciente: </label><input value="{{$pacientes->nombre}}" disabled /><br>
                                <label>Medico: </label><input value="{{$users->name}}" disabled /><br>
                                <input type="hidden" name="cita" value="{{$citamedicas->id}}">
                    </div>


                    <button type="submit" class="btn btn-primary">Registrar Consulta</button>
                </form>
            </div>
        </div>
    </div>
</section>