<table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Detalle Consulta</th>
                            <th>Indicaciones</th>
                            <th>laboratorio</th>
                            <th>N° de consulta</th>
                            <th>Paciente</th>
                            <th>Médico</th>

                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($recetamedicas as $recetamedica)
                            <tr>
                                <td>{{ $recetamedica->id }}</td>
                                <td>{{ $recetamedica->detalles }}</td>
                                <td>{{ $recetamedica->indicaciones }}</td>
                                <td>{{ $recetamedica->laboratorio }}</td>
                                <td>{{ $recetamedica->id_consulta }}</td>
                                <td>{{ $recetamedica->nombre }}</td>
                                <td>{{ $recetamedica->name }}</td>
                            </tr>  
                            @endforeach
                    </tbody>
                    
                
                </table>