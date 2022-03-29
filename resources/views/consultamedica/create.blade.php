@extends('plantilla.plantilla')
@section('titulo','Consulta Medica')
@section('contenido')

<section style="margin-top: 150px">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1>REGISTRO DE CONSULTAS MÉDICAS</h1><br>
                <form method="POST" action="{{ route('consultamedica.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fecha</label>
                        <input type="date" name="fecha" class="form-control" placeholder="Ingresa su nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hora de la Cita</label>
                        <input type="time" name="hora" class="form-control" placeholder="Ingresa su apellido parterno" value="{{ Carbon\Carbon::now()->format('H:i') }}" required>
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleInputPassword1">Detalle Consulta</label>
                        <textarea name="detalles"  cols="30" rows="10" class="form-control" required></textarea>
                    </div> 

                    <div class="form-group">
                        <label for="exampleInputEmail1"> Datos de Cita </label><br>

                        {{$citamedicas}}
            
                        <label>Numero Cita:   </label><input value="{{$citamedicas[0]->id}}" disabled ><br>
                        <input type="hidden" name="cita" value="{{$citamedicas[0]->id}}">

                        <label>Paciente:    </label><input name="hora" value="{{$citamedicas[0]->nombre}}" disabled /><br>                        

                        <label>Medico:    </label><input value="{{$citamedicas[0]->name}}" disabled /><br>                        
                        <input type="hidden" name="usuario" value="{{$citamedicas[0]->usuario_id}}">
                        
                    
                    </div>

                    
                    @role('medico|administrador')
                    <button type="submit" class="btn btn-primary">Registrar Consulta</button>

                    @else
                            
                    <td><p>No tiene permiso de acceso.</p></td>
                    @endrole
                </form>
            </div>
        </div>
    </div>
</section>