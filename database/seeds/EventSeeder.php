<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'name' => 'evento Galeria da turma TPSIP05.20',
            'description' => null,
            'category' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('events')->insert([
            'name' => 'evento Galeria da turma GRSIL.0110',
            'description' => null,
            'category' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('events')->insert([
            'name' => 'evento Galeria da turma MAL.1215',
            'description' => null,
            'category' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
