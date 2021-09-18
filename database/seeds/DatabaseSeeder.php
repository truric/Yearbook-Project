<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(DegreeSeeder::class);

        $this->call(DistrictSeeder::class);
        $this->call(CountySeeder::class);
        $this->call(ParishSeeder::class);


        $this->call(UserSeeder::class);
        $this->call(ProfessorSeeder::class);
        $this->call(StudentSeeder::class);

        $this->call(GroupSeeder::class);
        $this->call(EventSeeder::class);

        DB::table('event_group')->insert([
            'event_id' => '1',
            'group_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('event_group')->insert([
            'event_id' => '2',
            'group_id' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('event_group')->insert([
            'event_id' => '3',
            'group_id' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);



        DB::table('comment_user_events')->insert([
            'emitter_id' => 1,
            'recipient_id' => 1,
            'message' => 'Every teacher here has they way to teach, and every way they teach is great',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comment_user_events')->insert([
            'emitter_id' => 2,
            'recipient_id' => 1,
            'message' => 'We wore all goodfellas! Wiseguys… Then we joined ATEC.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comment_user_events')->insert([
            'emitter_id' => 3,
            'recipient_id' => 1,
            'message' => 'At ATEC, I improved my arsenal of bad jokes.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comment_user_events')->insert([
            'emitter_id' => 4,
            'recipient_id' => 1,
            'message' => 'I would like to thank w3schools, stack overflow and whoever invented Black Notepad. Thank you.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comment_user_events')->insert([
            'emitter_id' => 5,
            'recipient_id' => 1,
            'message' => 'Isto é um teste',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comment_user_events')->insert([
            'emitter_id' => 6,
            'recipient_id' => 1,
            'message' => "ATEC takes us to the limit! I've evolved a lot since the beginning",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comment_user_events')->insert([
            'emitter_id' => 7,
            'recipient_id' => 1,
            'message' => "ATEC as provided me a fantastic class of colleagues and teachers, and I feel I'm in the right place to help me with my future. I've learned and evolved a lot here and wish to continue.",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comment_user_events')->insert([
            'emitter_id' => 8,
            'recipient_id' => 1,
            'message' => "Life is a sandwich, no matter which way you flip it brad always comes first",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comment_user_events')->insert([
            'emitter_id' => 9,
            'recipient_id' => 1,
            'message' => "I consider ATEC as a reference school, and I am sure that it was the best choice to requalify myself professionally.",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comment_user_events')->insert([
            'emitter_id' => 10,
            'recipient_id' => 1,
            'message' => "Better than college",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comment_user_events')->insert([
            'emitter_id' => 11,
            'recipient_id' => 1,
            'message' => "There are 10 types of people in the world, those who know binary and those who realise this joke isn't funny",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comment_user_events')->insert([
            'emitter_id' => 12,
            'recipient_id' => 1,
            'message' => "My experience at Atec has allowed me to appreciate and to admire how students and trainers interact as well as to acknowledge the efficiency of institution's educational model.
//I find it a privilege to learn from skilled professionals with both an in-depth knowledge and proven experience in the area, thus enabling us to benefit from and to be up to date with the recent developments in the industry/sector/area. The constant support rendered to us by the board, staff and trainers was the feature which struck me the most and which I find worth mentioning.
//Atec is an educational institution which I strongly recommend!",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comment_user_events')->insert([
            'emitter_id' => 13,
            'recipient_id' => 1,
            'message' => "A minha experiência na atec tem sido muito boa e com sorte de calhar numa turma com colegas e professores excelentes.",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comment_user_events')->insert([
            'emitter_id' => 14,
            'recipient_id' => 1,
            'message' => "Amazing group spirit. The trainers are all brilliant and very accessible",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comment_user_events')->insert([
            'emitter_id' => 15,
            'recipient_id' => 1,
            'message' => "My experience at Atec has been one of constant learning and evolution, good individual and collective experiences. I made friends and we are always ready to help each other.",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comment_user_events')->insert([
            'emitter_id' => 16,
            'recipient_id' => 1,
            'message' => "Quis mudar de direção,
traçar um novo rumo.
Ganhar nova vida, projeção.
Desejar os tempos que virão.
Abraçar o futuro.
Inseguro decidi tentar
e logo, logo aprendi
a filosofia de aqui estar,
isto é bom, fiquei a pensar.
Como me sinto bem aqui.
Do zero ao infinito.
Da origem ao destino.
Somos moldados, esculpidos,
desafiados, espremidos,
por mestres do ensino.
Que a união prevaleça,
somos equipa, pois então,
no que quer que aconteça.
Porque aqui constrói-se cabeça,
mas também o coração.",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comment_user_events')->insert([
            'emitter_id' => 17,
            'recipient_id' => 1,
            'message' => "Brutal.
Os professores são autênticos irmãos que nos dão tudo para que sejamos bem-sucedidos, apesar da dificuldade de aprender tanta coisa em tão pouco tempo, vale a pena o esforço.
Está a superar as expectativas.
Para além disso também tive sorte na turma, os próprios formadores têm comentado isso mesmo em relação a nós.
Obrigado!
",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comment_user_events')->insert([
            'emitter_id' => 18,
            'recipient_id' => 1,
            'message' => "So far I'm enjoying every bit of this course. We already got taught a lot and I think this hands-on approach teaching method is really good to prepare us for a real job. Also I'm glad I met these great classmates who are there for each other, and also trainers that are really trying hard to adapt to this new reality. Sadly, covid happened otherwise this would be even better",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comment_user_events')->insert([
            'emitter_id' => 19,
            'recipient_id' => 1,
            'message' => "Muito trabalho, rigor e uma grande experiência formativa, estão a ver a ideia?",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('group_professor')->insert([
            'group_id' => 1,
            'professor_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('group_professor')->insert([
            'group_id' => 1,
            'professor_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('group_professor')->insert([
            'group_id' => 1,
            'professor_id' => 20,
            'created_at' => now(),
            'updated_at' => now()
        ]);



    }
}
