<?php

use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'Aveiro', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Beja', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Braga', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Bragança', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Castelo Branco', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Coimbra', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Évora', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Faro', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Guarda', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Leiria', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Lisboa', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Portalegre', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Porto', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Santarém', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Setúbal', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Viana do Castelo', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vila Real', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Viseu', 'created_at' => now(), 'updated_at' => now()]
        ];
        \DB::table('districts')->insert($data);
    }
}
