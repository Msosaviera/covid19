@extends('plantilla.plantilla')
@section('titulo','Registro Pacientes')
@section('contenido')

<section style="margin-top: 150px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('paciente.update',$paciente->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Ingrese los laboratorios requeridos" value="{{$paciente->nombre}}"  required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Apelido Paterno</label>
                        <input type="text" name="appaterno" class="form-control" placeholder="Ingrese los laboratorios requeridos" value="{{$paciente->appaterno}}"  required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Apellido Materno</label>
                        <input type="text" name="apmaterno" class="form-control" placeholder="Ingrese los laboratorios requeridos" value="{{$paciente->apmaterno}}"  required>
                    </div>
                    <div class="form-group row">
                            <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>
                           
                            <div class="col-md-6">
                                <select class="form-control" id="sexo" name="sexo">
                                @if($paciente->sexo == "Mujer")
                                <option selected value="{{$paciente->sexo}}">{{$paciente->sexo}}</option>
                                <option value="Hombre">Hombre</option>
                                @else
                                <option selected value="{{$paciente->sexo}}">{{$paciente->sexo}}</option>
                                <option value="Mujer">Mujer</option>
                                @endif
                                </select>
                               
                            </div>
                        </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fecha de Nacimiento</label>
                        <input type="date" name="fechaNacimiento" class="form-control" placeholder="Ingrese los laboratorios requeridos" value="{{$paciente->fechaNacimiento}}"  required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Canet de identidad</label>
                        <input type="text" name="carnetIdentidad" class="form-control" placeholder="Ingrese los laboratorios requeridos" value="{{$paciente->carnetIdentidad}}"  required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telefono</label>
                        <input type="text" name="telefono" class="form-control" placeholder="Ingrese los laboratorios requeridos" value="{{$paciente->telefono}}"  required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Dirección</label>
                        <input type="text" name="direccion" class="form-control" placeholder="Ingrese los laboratorios requeridos" value="{{$paciente->direccion}}"  required>
                    </div>



                    <button type="submit" class="btn btn-primary">Registrar paciente</button>
                </form>
            </div>
        </div>
    </div>
</section>