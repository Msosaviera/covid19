<table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Género</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Carnet de identidad</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>

                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($pacientes as $paciente)
                            <tr>
                                <td>{{ $paciente->id }}</td>
                                <td>{{ $paciente->nombre }}</td>
                                <td>{{ $paciente->appaterno }}</td>
                                <td>{{ $paciente->apmaterno }}</td>
                                <td>{{ $paciente->sexo }}</td>
                                <td>{{ $paciente->fechaNacimiento }}</td>
                                <td>{{ $paciente->carnetIdentidad }}</td>
                                <td>{{ $paciente->telefono }}</td>
                                <td>{{ $paciente->direccion }}</td>
                                
                               
                                
                                
                            </tr>

                            @endforeach
                    </tbody>
                   
                </table>