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
                            @foreach ($citamedicas as $citamedica)
                                <label>Numero Cita:   </label><input value="{{$citamedica->id}}" disabled ><br>
                                <label>Paciente:    </label><input value="{{$citamedica->nombre}}" disabled /><br>
                                <label>Medico:    </label><input value="{{$citamedica->name}}" disabled /><br>
                                <input type="hidden" name="cita" value="{{$citamedica->id}}">
                            @endforeach
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