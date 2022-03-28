@extends('plantilla.plantilla')
@section('titulo','Registro Usuarios')
@section('contenido')

<section style="margin-top: 150px">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1>REGISTRO DE Usuarios</h1><br>
                <!-- <form method="POST" action="{{ route('user.store') }}"> -->


                {!!Form::open(array('route'=>array('user.store'), 'method'=>'post')) !!}
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre de usuario</label>
                        <input type="text" name="name" class="form-control" placeholder="Ingrese nombre de usuario" required>
                    </div>                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo</label>
                        <input type="text" name="email" class="form-control" placeholder="Correo electrónico" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contraseña</label>
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                    </div>
                                        
                    {{Form::label('Roles')}}

                    {{Form::select('rol', $roles,1,['class'=>'form-control'])}}<br>

                    
                    <button type="submit" class="btn btn-primary">Registrar Paciente</button>
                <!-- </form> -->
                {!!Form::close() !!}
            </div>
        </div>
    </div>
</section>