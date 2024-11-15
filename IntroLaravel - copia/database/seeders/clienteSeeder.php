<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cliente')->insert([[
            'nombre' => 'Diego',
            'apellido' => 'Valdelamar',
            'correo' => 'diego@mail.com',
            'telefono' => '1234567890'
        ],[
            'nombre' => 'Emiliano',
            'apellido' => 'Santos',
            'correo' => 'upq123@mail.com',
            'telefono' => '+0234567890'
        ],[
            'nombre' => 'Juan',
            'apellido' => 'Servantes',
            'correo' => 'ashj123@mail.com',
            'telefono' => '+4886457890'
        ]
        ]);
        //this is the way to insert data into the database
    }
}
