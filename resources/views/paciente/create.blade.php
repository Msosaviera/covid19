@extends('plantilla.plantilla')
@section('titulo','RecetaMedica')
@section('contenido')

<section style="margin-top: 150px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('paciente.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Ingrese los laboratorios requeridos" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Apelido Paterno</label>
                        <input type="text" name="appaterno" class="form-control" placeholder="Ingrese los laboratorios requeridos" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Apellido Materno</label>
                        <input type="text" name="apmaterno" class="form-control" placeholder="Ingrese los laboratorios requeridos" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Género</label>
                        <input type="text" name="sexo" class="form-control" placeholder="Ingrese los laboratorios requeridos" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fecha de Nacimiento</label>
                        <input type="date" name="fechaNacimiento" class="form-control" placeholder="Ingrese los laboratorios requeridos" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Canet de identidad</label>
                        <input type="text" name="carnetIdentidad" class="form-control" placeholder="Ingrese los laboratorios requeridos" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telefono</label>
                        <input type="text" name="telefono" class="form-control" placeholder="Ingrese los laboratorios requeridos" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Dirección</label>
                        <input type="text" name="direccion" class="form-control" placeholder="Ingrese los laboratorios requeridos" required>
                    </div>
                    


                    <button type="submit" class="btn btn-primary">Registrar Paciente</button>
                </form>
            </div>
        </div>
    </div>
</section>