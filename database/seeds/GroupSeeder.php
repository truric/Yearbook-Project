<?php

use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'name' => 'TPSIP.0520',
            'slogan' => 'Think twice. Code once.',
            'coordinator_id' => 1,
            'degree_id' => 4,
            'month' => 5,
            'year' => 2020,
            'city' => 'P',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('groups')->insert([
            'name' => 'GRSIL.0110',
            'slogan' => null,
            'coordinator_id' => 2,
            'degree_id' => 3,
            'month' => 1,
            'year' => 2010,
            'city' => 'L',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('groups')->insert([
            'name' => 'MAL.1215',
            'slogan' => null,
            'coordinator_id' => 1,
            'degree_id' => 2,
            'month' => 12,
            'year' => 2015,
            'city' => 'L',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
