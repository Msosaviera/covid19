                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fecha Cita</th>
                            <th>Hora Cita</th>
                            <th>Molestas Previas</th>
                            <th>Paciente</th>
                            <th>Médico</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($citamedicas as $citamedica)
                            <tr>
                                <td>{{ $citamedica->id }}</td>
                                <td>{{ $citamedica->fechaCita }}</td>
                                <td>{{ $citamedica->horaCita }}</td>
                                <td>{{ $citamedica->molestiasPrevias}}</td>
                                <td>{{ $citamedica->nombre }}</td>
                                <td>{{ $citamedica->name }}</td>
                            @endforeach
                    </tbody>
                    
                </table>