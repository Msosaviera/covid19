@extends('plantilla.plantilla')
@section('titulo','Registro Usuarios')
@section('contenido')

<section style="margin-top: 150px">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1>REGISTRO DE Usuarios</h1><br>
                <form method="POST" action="{{ route('user.store') }}">
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
                    

                    <div class="form-group">
                        <label for="exampleInputEmail1"> Roles </label>
                        <select name="roles">
                            @forelse ($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                                                        
                            @endforelse
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary">Registrar Paciente</button>
                </form>
            </div>
        </div>
    </div>
</section>