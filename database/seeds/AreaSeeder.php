<?php

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'name' => 'Automóvel',
            'description' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('areas')->insert([
            'name' => 'Informática',
            'description' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('areas')->insert([
            'name' => 'Mecânica e Tecnologias',
            'description' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('areas')->insert([
            'name' => 'Soldadura',
            'description' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('areas')->insert([
            'name' => 'Eletrónica',
            'description' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('areas')->insert([
            'name' => 'Automação e Robótica',
            'description' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
