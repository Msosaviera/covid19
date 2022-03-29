@extends('plantilla.plantilla')
@section('titulo','Cita Medica')
@section('contenido')

<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>


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
                     
                            
                        </select>
                        <select class="selectpicker show-menu-arrow" 
                                data-style="form-control" 
                                data-live-search="true" 
                                title="Selccionar paciente"
                                multiple="multiple">
                            @foreach ($pacientes as $paciente)
                                <option data-tokens="{{$paciente->nombre}}" value="{{$paciente->id}}">{{$paciente->nombre}} {{$paciente->appaterno}}  {{$paciente->apmaterno}}</option>
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