<?php

use Illuminate\Database\Seeder;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            'nombre' => 'Juan',
            'appaterno' => 'Perez',
            'apmaterno' => 'Pereira',
            'sexo' => 'Hombre',
            'fechaNacimiento' => '1990/12/12',
            'carnetIdentidad' => '12345678',
            'telefono' => '75395123',
            'direccion' => 'Av. 3 pasos al frente 4to anillo',

        ]);
        DB::table('pacientes')->insert([
            'nombre' => 'Maria',
            'appaterno' => 'Callau',
            'apmaterno' => 'Pedraza',
            'sexo' => 'Mujer',
            'fechaNacimiento' => '1981/06/21',
            'carnetIdentidad' => '87654321',
            'telefono' => '65432198',
            'direccion' => 'Calle charcas # 123',

        ]);
    }
}
