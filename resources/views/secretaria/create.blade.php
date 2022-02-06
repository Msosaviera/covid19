@extends('plantilla.plantilla')
@section('titulo','Registro Secretarias')
@section('contenido')

<section style="margin-top: 150px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('secretaria.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre </label>
                        <input type="text" name="nombre" class="form-control" placeholder="Ingresa su nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Apellido Paterno</label>
                        <input type="text" name="appaterno" class="form-control" placeholder="Ingresa su apellido parterno" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Apellido Materno</label>
                        <input type="text" name="apmaterno" class="form-control" placeholder="Ingresa su apellido materno" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo Electronico</label>
                        <input type="text" name="email" class="form-control" placeholder="Ingresa su carnet de identidad" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fecha de Nacimiento</label>
                        <input type="date" name="fechanacimiento" class="form-control" placeholder="Ingresa su teléfono" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Carnet de identidad</label>
                        <input type="text" name="carnetidentidad" class="form-control" placeholder="Ingresa su especialidad" required>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telefono</label>
                        <input type="text" name="telefono" class="form-control" placeholder="Ingresa su especialidad" required>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Dirección</label>
                        <input type="text" name="direccion" class="form-control" placeholder="Ingresa su especialidad" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Usuario </label>
                        <select name="usuario" id="">
                            @foreach ($usuarios as $usuario)
                                <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                            @endforeach
                        </select>
                    </div>



                    <button type="submit" class="btn btn-primary">Registrar Medico</button>
                </form>
            </div>
        </div>
    </div>
</section>