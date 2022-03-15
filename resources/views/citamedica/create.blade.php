@extends('plantilla.plantilla')
@section('titulo','Cita Medica')
@section('contenido')

<section style="margin-top: 150px">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1>REGISTRO DE CITAS MÉDICAS</h1>
                <form method="POST" action="{{ route('citamedica.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fecha de la Cita</label>
                        <input type="date" name="fechaCita" class="form-control" placeholder="Ingresa su nombre" value="{{ Carbon\Carbon::now()->format('Y-m-d') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hora de la Cita</label>
                        <input type="time" name="horaCita" class="form-control" placeholder="Ingresa su apellido parterno" value="{{ Carbon\Carbon::now()->format('H:i') }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Molestia previa a la cita</label>
                        <textarea name="molestiasPrevias"  cols="30" rows="10" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Paciente </label>
                        <select name="paciente" id="">
                            @foreach ($pacientes as $paciente)
                                <option value="{{$paciente->id}}">{{$paciente->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Médico </label>
                        <select name="usuario" id="">
                            @foreach ($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>



                    <button type="submit" class="btn btn-primary">Registrar Cita</button>
                </form>
            </div>
        </div>
    </div>
</section>