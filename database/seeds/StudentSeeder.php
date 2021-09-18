<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'user_id' => '1',
            'group_id' => 1,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => 'Sasha',
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('students')->insert([
            'user_id' => '2',
            'group_id' => 1,
            'category' =>'1',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 2,
            'latitude' => 41.1020121212,
            'longitude' => -8.602 ,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('students')->insert([
            'user_id' => '3',
            'group_id' => 1,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '4',
            'group_id' => 1,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '5',
            'group_id' => 1,
            'category' =>'3',
            'parish_id' => '1958',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '6',
            'group_id' => 1,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 2,
            'latitude' => 41.44177,
            'longitude' => -8.29557,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '7',
            'group_id' => 1,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '8',
            'group_id' => 1,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 2,
            'latitude' => 41.41830,
            'longitude' => -8.74872,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '9',
            'group_id' => 1,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '10',
            'group_id' => 1,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 2,
            'latitude' => 41.220612639480144,
            'longitude' => -8.686457291495511,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '11',
            'group_id' => 1,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '12',
            'group_id' => 1,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '13',
            'group_id' => 1,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 2,
            'latitude' =>  41.22062877946441,
            'longitude' => -8.686371460805997,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '14',
            'group_id' => 1,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '15',
            'group_id' => 1,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '16',
            'group_id' => 1,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '17',
            'group_id' => 1,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '18',
            'group_id' => 1,
            'category' =>'2',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '19',
            'group_id' => 1,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);





        DB::table('students')->insert([
            'user_id' => '20',
            'group_id' => null,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('students')->insert([
            'user_id' => '21',
            'group_id' => null,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('students')->insert([
            'user_id' => '22',
            'group_id' => null,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '23',
            'group_id' => null,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '24',
            'group_id' => null,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '25',
            'group_id' => null,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '26',
            'group_id' => null,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '27',
            'group_id' => null,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '28',
            'group_id' => null,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '29',
            'group_id' => null,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '30',
            'group_id' => null,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '31',
            'group_id' => null,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '32',
            'group_id' => null,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '33',
            'group_id' => null,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '34',
            'group_id' => null,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '35',
            'group_id' => null,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '36',
            'group_id' => null,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '37',
            'group_id' => null,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => '38',
            'group_id' => null,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('students')->insert([
            'user_id' => '39',
            'group_id' => null,
            'category' =>'3',
            'parish_id' => '1',
            'nickname' => null,
            'phone' => null,
            'permissionPhone' => 0,
            'permissionAddress' => 0,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);



    }
}
