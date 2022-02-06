@extends('plantilla.plantilla')
@section('titulo','RecetaMedica')
@section('contenido')

<section style="margin-top: 150px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('recetamedica.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">laboratorio</label>
                        <input type="text" name="laboratorio" class="form-control" placeholder="Ingrese los laboratorios requeridos" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Indicaciones</label>
                        <textarea name="indicaciones"  cols="30" rows="10" class="form-control" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Registrar Receta</button>
                </form>
            </div>
        </div>
    </div>
</section>