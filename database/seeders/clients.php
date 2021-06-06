<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class clients extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->insert([
            'id' => 1,
            'cod' => "10215",
            'name' => "Julian Perdomo",
            'citie_id' =>7,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('clients')->insert([
            'id' => 2,
            'cod' => "10285",
            'name' => "Andres Cortes",
            'citie_id' =>7,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('clients')->insert([
            'id' => 3,
            'cod' => "10295",
            'name' => "Maria Rojas",
            'citie_id' =>7,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('clients')->insert([
            'id' => 4,
            'cod' => "10275",
            'name' => "Juliana Perez",
            'citie_id' =>2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('clients')->insert([
            'id' => 5,
            'cod' => "10115",
            'name' => "Daniel Esteban",
            'citie_id' =>9,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
