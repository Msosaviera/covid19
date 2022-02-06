@extends('plantilla.plantilla')
@section('titulo','Registro de Citas')
@section('contenido')

<section style="margin-top: 150px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('preguntas.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre Completo</label>
                        <input type="text" name="titulo" class="form-control" placeholder="Ingresa su nombre" required>
                        <small id="emailHelp" class="form-text text-muted">Debe colocar su nombre Completo</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Fecha y hora de cita</label>
                        <input type="text" name="link" class="form-control" placeholder="Ingrese su hora de cita" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Molestia previa a la cita</label>
                        <textarea name="contenido"  cols="30" rows="10" class="form-control" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Registrar Cita</button>
                </form>
            </div>
        </div>
    </div>
</section>