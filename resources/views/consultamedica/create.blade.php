@extends('plantilla.plantilla')
@section('titulo','Consulta Medica')
@section('contenido')

<section style="margin-top: 150px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('consultamedica.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Número de Cita</label>
                        <input type="int" name="numCita" class="form-control" placeholder="Ingresa su apellido parterno" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fecha</label>
                        <input type="date" name="fecha" class="form-control" placeholder="Ingresa su nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hora de la Cita</label>
                        <input type="time" name="hora" class="form-control" placeholder="Ingresa su apellido parterno" required>
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleInputPassword1">Molestia previa a la cita</label>
                        <textarea name="molestiasPrevias"  cols="30" rows="10" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Receta </label>
                        <select name="recetamedica" id="">
                            @foreach ($recetamedicas as $recetamedica)
                                <option value="{{$recetamedica->id}}">{{$recetamedica->indicaciones}}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- <div class="form-group">
                        <label for="exampleInputEmail1"> Secretaria </label>
                        <select name="secretaria" id="">
                            @foreach ($secretarias as $secretaria)
                                <option value="{{$secretaria->id}}">{{$secretaria->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Médico </label>
                        <select name="medico" id="">
                            @foreach ($medicos as $medico)
                                <option value="{{$medico->id}}">{{$medico->nombre}}</option>
                            @endforeach
                        </select>
                    </div> -->
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Cita </label>
                        <select name="citamedica" id="">
                            @foreach ($citamedicas as $citamedica)
                                <option value="{{$citamedica->id}}">{{$citamedica->id}}</option>
                            @endforeach
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary">Registrar Consulta</button>
                </form>
            </div>
        </div>
    </div>
</section>