@extends('plantilla.plantilla')
@section('titulo','Registro Usuarios')
@section('contenido')

<section style="margin-top: 150px">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1>REGISTRO DE Usuarios</h1><br>
                <!-- <form method="POST" action="{{ route('user.store') }}"> -->

                {!!Form::model($user, ['route' => ['user.update', $user->id],'method'=>'put']) !!}
                    @csrf
                    {{Form::label('Usuario')}}
                    {{Form::text('name',null,['class'=>'form-control'])}}
                    {{Form::label('Correo')}}
                    {{Form::text('email',null,['class'=>'form-control'])}}
                    {{Form::label('Clave')}}
                    {{Form::text('password',"",['class'=>'form-control'])}}
                    {{Form::label('Roles')}}
                    {{Form::select('rol', $roles,$rol_activo,['class'=>'form-control'])}}
                    
                    <button type="submit" class="btn btn-primary">Registrar Paciente</button>
                <!-- </form> -->
                {!!Form::close() !!}
            </div>
        </div>
    </div>
</section>