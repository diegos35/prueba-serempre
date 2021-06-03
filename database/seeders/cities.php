<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cities extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cities')->insert([
            'id' => 1,
            'cod' => "LA",
            'name' => 'Leticia',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('cities')->insert([
            'id' => 2,
            'cod' => "MN",
            'name' => 'Medellín',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('cities')->insert([
            'id' => 3,
            'cod' => "AA",
            'name' => 'Arauca',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('cities')->insert([
            'id' => 4,
            'cod' => "BA",
            'name' => 'Barranquilla',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('cities')->insert([
            'id' => 5,
            'cod' => "CA",
            'name' => 'Cartagena ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('cities')->insert([
            'id' => 6,
            'cod' => "TA",
            'name' => 'Tunja',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('cities')->insert([
            'id' => 7,
            'cod' => "MS",
            'name' => 'Manizales',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('cities')->insert([
            'id' => 8,
            'cod' => "FA",
            'name' => 'Florencia',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('cities')->insert([
            'id' => 9,
            'cod' => "YL",
            'name' => 'Yopal',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('cities')->insert([
            'id' => 10,
            'cod' => "PN",
            'name' => 'Popayán',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('cities')->insert([
            'id' => 11,
            'cod' => "VR",
            'name' => 'Valledupar',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('cities')->insert([
            'id' => 12,
            'cod' => "QO",
            'name' => 'Quibdó',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
