<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Marcelo Sosa',
            'email' => 'marcelo@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

    DB::table('users')->insert(
    [
        'name' => 'Maria del Carmen Viera',
        'email' => 'mariadelcarmeno@gmail.com',
        'password' => Hash::make('12345678'),
        
    ]
);
DB::table('users')->insert(
[
    'name' => 'Jose Ernesto Sandoval',
    'email' => 'joseernesto@gmail.com',
    'password' => Hash::make('12345678'),
    
]
);
        
    }
}
