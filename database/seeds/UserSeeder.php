<?php

use Illuminate\Database\Seeder;
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
            'fullName' => 'Alexandre Cardoso Menezes',
            'simpleName' => 'Alexandre Menezes',
            'email' =>'alexandre.menezes.t0118427@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/T0118427.png',
            'atec_id'=> 'T0118427',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'André Fonseca de Oliveira Fernandes',
            'simpleName' => 'André Fernandes',
            'email' =>'andre.fernandes.t0118429@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/T0118429.png',
            'atec_id'=> 'T0118429',
            'role'=>5,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'António Pedro Morim Rocha',
            'simpleName' => 'António Morim',
            'email' =>'antonio.rocha.t0118430@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/T0118430.jpg',
            'atec_id'=> 'T0118430',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'António Pedro Tojal Barbosa da Silva Rocha',
            'simpleName' => 'António Tojal',
            'email' =>'antonio.rocha.t0118599@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/T0118599.jpg',
            'atec_id'=> 'T0118599',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Bernardo Maria Ferreira da Silva Vieira de Castro',
            'simpleName' => 'Bernardo Castro',
            'email' =>'bernardo.castro.t0118598@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/T0118598.jpg',
            'atec_id'=> 'T0118598',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Bruno José Coelho Pereira',
            'simpleName' => 'Bruno Pereira',
            'email' =>'bruno.pereira.t0118431@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/T0118431.png',
            'atec_id'=> 'T0118431',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Daniel Donato Carvalho Guimarães',
            'simpleName' => 'Daniel Guimarães',
            'email' =>'daniel.guimaraes.t0118432@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/T0118432.jpg',
            'atec_id'=> 'T0118432',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Daniel Filipe Do Val Nogueira',
            'simpleName' => 'Daniel Nogueira',
            'email' =>'daniel.nogueira.t0118433@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/T0118433.jpg',
            'atec_id'=> 'T0118433',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Emanuel Fernando Rocha Ferreira Teixeira',
            'simpleName' => 'Emanuel Teixeira',
            'email' =>'emanuel.teixeira.t0118434@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/T0118434.jpg',
            'atec_id'=> 'T0118434',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'João Mário Pereira Carvalhinho',
            'simpleName' => 'João Carvalhinho',
            'email' =>'joao.carvalhinho.t0118436@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/T0118436.jpg',
            'atec_id'=> 'T0118436',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'João Paulo Palha de Vasconcelos',
            'simpleName' => 'João Vasconcelos',
            'email' =>'joao.vasconcelos.t0118437@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/T0118437.jpg',
            'atec_id'=> 'T0118437',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'José António Pereira Gonçalves',
            'simpleName' => 'José Gonçalves',
            'email' =>'jose.goncalves.t0118438@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/T0118438.jpg',
            'atec_id'=> 'T0118438',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Leandro Medeiros Barbosa',
            'simpleName' => 'Leandro Barbosa',
            'email' =>'leandro.barbosa.t0117781@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/T0117781.jpg',
            'atec_id'=> 'T0117781',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Luis Filipe Pires Ferreira',
            'simpleName' => 'Luis Ferreira',
            'email' =>'luis.ferreira.t0118439@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/T0118439.jpg',
            'atec_id'=> 'T0118439',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Marcos Daniel Mendes Ferreira',
            'simpleName' => 'Marcos Ferreira',
            'email' =>'marcos.ferreira.t01185414@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/T01185414.png',
            'atec_id'=> 'T01185414',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);


        DB::table('users')->insert([
            'fullName' => 'Ricardo Filipe Afonseca Caetano',
            'simpleName' => 'Ricardo Caetano',
            'email' =>'ricardo.caetano.t0118442@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/T0118442.png',
            'atec_id'=> 'T0118442',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Ricardo Ivo Gonçalves Veríssimo Parada',
            'simpleName' => 'Ricardo Parada',
            'email' =>'ricardo.parada.t0118443@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/T0118443.jpg',
            'atec_id'=> 'T0118443',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Rui Filipe dos Santos Rodrigues',
            'simpleName' => 'Rui Rodrigues',
            'email' =>'rui.rodrigues.t0118444@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/T0118444.png',
            'atec_id'=> 'T0118444',
            'role'=>5,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Vítor Hugo Fortunato Moreira',
            'simpleName' => 'Vítor Moreira',
            'email' =>'vitor.moreira.t0118445@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/T0118445.jpg',
            'atec_id'=> 'T0118445',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);





        DB::table('users')->insert([
            'fullName' => 'Ana Cardoso Menezes',
            'simpleName' => 'Ana Menezes',
            'email' =>'ana.menezes.t9118427@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> 'T9118427',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Beatriz Fonseca de Oliveira Fernandes',
            'simpleName' => 'Beatriz Fernandes',
            'email' =>'beatriz.fernandes.t9118429@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> 'T9118429',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Carolina Pedro Morim Rocha',
            'simpleName' => 'Carolina Morim',
            'email' =>'carolina.morim.t9118430@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> 'T9118430',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Diana Pedro Tojal Barbosa da Silva Rocha',
            'simpleName' => 'Diana Tojal',
            'email' =>'diana.tojal.t9118599@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> 'T9118599',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Emma Maria Ferreira da Silva Vieira de Castro',
            'simpleName' => 'emma Castro',
            'email' =>'emma.catro.t9118598@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> 'T9118598',
            'role'=>5,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Francisca José Coelho Pereira',
            'simpleName' => 'Francisca Pereira',
            'email' =>'francisca.pereira.t9118431@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> 'T9118431',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Gabriela Donato Carvalho Guimarães',
            'simpleName' => 'Gabriela Guimarães',
            'email' =>'gabriela.guimaraes.t9118432@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> 'T9118432',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Helena Filipe Do Val Nogueira',
            'simpleName' => 'Helena Nogueira',
            'email' =>'helena.nogueira.t9118433@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> 'T9118433',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Inês Fernando Rocha Ferreira Teixeira',
            'simpleName' => 'Inês Teixeira',
            'email' =>'ines.teixeira.t9118434@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> 'T9118434',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Joana Mário Pereira Carvalhinho',
            'simpleName' => 'Joana Carvalhinho',
            'email' =>'joana.carvalhinho.t9118436@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> 'T9118436',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Lauren Paulo Palha de Vasconcelos',
            'simpleName' => 'Lauren Vasconcelos',
            'email' =>'lauren.vasconcelos.t9118437@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> 'T9118437',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Maria António Pereira Gonçalves',
            'simpleName' => 'Maria Gonçalves',
            'email' =>'maria.goncalves.t9118438@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> 'T9118438',
            'role'=>5,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Noemi Medeiros Barbosa',
            'simpleName' => 'Noemi Barbosa',
            'email' =>'noemi.barbosa.t9117781@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> 'T9117781',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Olivia Filipe Pires Ferreira',
            'simpleName' => 'Olivia Ferreira',
            'email' =>'olivia.ferreira.t9118439@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> 'T9118439',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Patricia Daniel Mendes Ferreira',
            'simpleName' => 'Patricia Ferreira',
            'email' =>'patricia.ferreira.T91185414@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> 'T91185414',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Rita Daniel Mendes Ferreira',
            'simpleName' => 'Rita Ferreira',
            'email' =>'rita.ferreira.t91185416@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> 'T91185416',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Sofia Filipe Afonseca Caetano',
            'simpleName' => 'Sofia Caetano',
            'email' =>'sofia.caetano.t9118442@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> 'T9118442',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Teresa Ivo Gonçalves Veríssimo Parada',
            'simpleName' => 'Teresa Parada',
            'email' =>'teresa.parada.t9118443@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> 'T9118443',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Ursula Filipe dos Santos Rodrigues',
            'simpleName' => 'Ursula Rodrigues',
            'email' =>'ursula.rodrigues.t9118444@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> 'T9118444',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Vitoria Hugo Fortunato Moreira',
            'simpleName' => 'Vitoria Moreira',
            'email' =>'vitoria.moreira.t9118445@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> 'T9118445',
            'role'=>6,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);














        DB::table('users')->insert([
            'fullName' => 'Helder Pinto',
            'simpleName' => 'Helder Pinto',
            'email' =>'helder.pinto.000680@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> '000680',
            'role'=>3,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'fullName' => 'Pedro Vasconcelos',
            'simpleName' => 'Pedro Vasconcelos',
            'email' =>'pedro.vasconcelos.@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> '0',
            'role'=>2,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'fullName' => 'Sergio da Silva Nogueira',
            'simpleName' => 'Sergio Nogueira',
            'email' =>'sergio.nogueira.0001101@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> '0001101',
            'role'=>3,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'fullName' => 'Miguel Paulo Oliveira da Silva',
            'simpleName' => 'Miguel Silva',
            'email' =>'miguel.silva.0001112@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'role'=>4,
            'atec_id'=> '0001112',
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Leão Leão',
            'simpleName' => 'Leão Leão',
            'email' =>'leao.leao.a01@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/a01.jpg',
            'role'=>2,
            'atec_id'=> 'A01',
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'fullName' => 'Cão Cão',
            'simpleName' => 'Cão Cão',
            'email' =>'cao.cao.a02@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/a02.jpg',
            'atec_id'=> 'A02',
            'role'=>2,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'fullName' => 'Gato Gato',
            'simpleName' => 'Gato Gato',
            'email' =>'gato.gato.a03@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/a03.jpg',
            'atec_id'=> 'A03',
            'role'=>2,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'fullName' => 'Lontra Lontra',
            'simpleName' => 'Lontra Lontra',
            'email' =>'lontra.lontra.a04@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/a04.jpg',
            'atec_id'=> 'A04',
            'role'=>2,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'fullName' => 'Tigre Tigre',
            'simpleName' => 'Tigre Tigre',
            'email' =>'tigre.tigre.a05@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/a05.jpg',
            'atec_id'=> 'A05',
            'role'=>2,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'fullName' => 'Águia Águia',
            'simpleName' => 'Águia Águia',
            'email' =>'aguia.aguia.b01@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/b01.jpg',
            'atec_id'=> 'B01',
            'role'=>3,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'fullName' => 'Pato Pato',
            'simpleName' => 'Pato Pato',
            'email' =>'pato.pato.b02@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/b02.jpg',
            'atec_id'=> 'B02',
            'role'=>3,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'fullName' => 'Falcão Falcão',
            'simpleName' => 'Falcão Falcão',
            'email' =>'falcao.falcao.b03@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/b03.jpg',
            'atec_id'=> 'B03',
            'role'=>3,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'fullName' => 'Coruja Coruja',
            'simpleName' => 'Coruja Coruja',
            'email' =>'coruja.coruja.b04@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/b04.jpg',
            'atec_id'=> 'B04',
            'role'=>3,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'fullName' => 'Pinguim Pinguim',
            'simpleName' => 'Pinguim Pinguim',
            'email' =>'pinguim.pinguim.b05@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/b05.jpg',
            'atec_id'=> 'B05',
            'role'=>3,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'fullName' => 'Borboleta Borboleta',
            'simpleName' => 'Borboleta Borboleta',
            'email' =>'borboleta.borboleta.c01@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/c01.jpg',
            'atec_id'=> 'C01',
            'role'=>4,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'fullName' => 'Formiga Formiga',
            'simpleName' => 'Formiga Formiga',
            'email' =>'formiga.formiga.c02@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/c02.jpg',
            'atec_id'=> 'C02',
            'role'=>4,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'fullName' => 'Mosca Mosca',
            'simpleName' => 'Mosca Mosca',
            'email' =>'mosca.mosca.c03@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/c03.jpg',
            'atec_id'=> 'C03',
            'role'=>4,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'fullName' => 'Abelha Abelha',
            'simpleName' => 'Abelha Abelha',
            'email' =>'abelha.abelha.c04@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/c04.jpg',
            'atec_id'=> 'C04',
            'role'=>4,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'fullName' => 'Joaninha Joaninha',
            'simpleName' => 'Joaninha Joaninha',
            'email' =>'Joaninha.Joaninha.c05@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/profilePhotos/c05.jpg',
            'atec_id'=> 'C05',
            'role'=>4,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Ana Ferraz',
            'simpleName' => 'Ana Ferraz',
            'email' =>'ana.ferraz.000658@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> '000658',
            'role'=>4,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'fullName' => 'Paulo Peixoto',
            'simpleName' => 'Paulo Peixoto',
            'email' =>'paulo.peixoto.supra@edu.atec.pt',
            'password'=> Hash::make('atec123'),
            'url' => '/fixed/images/defaultProfilePicture.png',
            'atec_id'=> 'supra',
            'role'=>1,
            'permissionEmail' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);





    }
}
