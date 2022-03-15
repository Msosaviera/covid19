<table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Detalle</th>
                            <th>Paciente</th>
                            <th>Cita</th>
                            <th>Médico</th>
   
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($consultamedicas as $consultamedica)
                            <tr>
                                <td>{{ $consultamedica->id }}</td>
                                <td>{{ $consultamedica->fecha }}</td>
                                <td>{{ $consultamedica->hora }}</td>
                                <td>{{ $consultamedica->detalles}}</td>
                                <td>{{ $consultamedica->nombre}}</td>
                                <td>{{ $consultamedica->id_citamedicas }}</td>
                                <td>{{ $consultamedica->name }}</td>
                                </tr>

@endforeach
                    </tbody>
                  
                </table>