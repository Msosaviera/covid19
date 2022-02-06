@extends('plantilla.plantilla')
@section('titulo','Cita Medica')
@section('contenido')

<section style="margin-top: 150px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('citamedica.update',$citamedica->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fecha de la Cita</label>
                        <input type="date" name="fechaCita" class="form-control" placeholder="Ingresa su nombre" value="{{$citamedica->fechaCita}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hora de la Cita</label>
                        <input type="time" name="horaCita" class="form-control" placeholder="Ingresa su apellido parterno" value="{{$citamedica->horaCita}}" required>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Molestia previa a la cita</label>
                        <textarea name="molestiasPrevias"  cols="30" rows="10" class="form-control" required>{{$citamedica->molestiasPrevias}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Paciente </label>
                        <select name="paciente" id="">
                            @foreach ($pacientes as $paciente)
                                @if($paciente->id == $citamedica->paciente_id)
                                    <option selected value="{{$paciente->id}}">{{$paciente->nombre}}</option>    
                                @else
                                    <option value="{{$paciente->id}}">{{$paciente->nombre}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Médico </label>
                        <select name="usuario" id="">
                            @foreach ($users as $user)
                            @if($user->rol == "Medico"){
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            }
                            @endif
                            @endforeach
                        </select>
                    </div>



                    <button type="submit" class="btn btn-primary">Registrar Cita</button>
                </form>
            </div>
        </div>
    </div>
</section>