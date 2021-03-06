<?php

use Illuminate\Database\Seeder;

class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            //aveiro
            ['name'=>'Águeda','district_id'=>'1', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Albergaria-a-Velha','district_id'=>'1', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Anadia','district_id'=>'1', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Arouca','district_id'=>'1', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Aveiro','district_id'=>'1', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Castelo de Paiva','district_id'=>'1', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Espinho','district_id'=>'1', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Estarreja','district_id'=>'1', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Ílhavo','district_id'=>'1', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Mealhada','district_id'=>'1', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Murtosa','district_id'=>'1', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Oliveira de Azeméis','district_id'=>'1', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Oliveira do Bairro','district_id'=>'1', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Ovar','district_id'=>'1', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Santa Maria da Feira','district_id'=>'1', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'São João da Madeira','district_id'=>'1', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Sever do Vouga','district_id'=>'1', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vagos','district_id'=>'1', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vale de Cambra','district_id'=>'1', 'created_at' => now(), 'updated_at' => now()],
            //beja
            ['name'=>'Aljustrel','district_id'=>'2', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Almodôvar','district_id'=>'2', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Alvito','district_id'=>'2', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Barrancos','district_id'=>'2', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Beja','district_id'=>'2', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Castro Verde','district_id'=>'2', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Cuba','district_id'=>'2', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Ferreira do Alentejo','district_id'=>'2', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Mértola','district_id'=>'2', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Moura','district_id'=>'2', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Odemira','district_id'=>'2', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Ourique','district_id'=>'2', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Serpa','district_id'=>'2', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vidigueira','district_id'=>'2', 'created_at' => now(), 'updated_at' => now()],
            //braga
            ['name'=>'Amares','district_id'=>'3', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Barcelos','district_id'=>'3', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Braga','district_id'=>'3', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Cabeceiras de Basto','district_id'=>'3', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Celorico de Basto','district_id'=>'3', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Esposende','district_id'=>'3', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Fafe','district_id'=>'3', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Guimarães','district_id'=>'3', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Póvoa de Lanhoso','district_id'=>'3', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Terras de Bouro','district_id'=>'3', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vieira do Minho','district_id'=>'3', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vila Nova de Famalicão','district_id'=>'3', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vila Verde','district_id'=>'3', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vizela','district_id'=>'3', 'created_at' => now(), 'updated_at' => now()],
            //bragança
            ['name'=>'Alfândega da Fé','district_id'=>'4', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Bragança','district_id'=>'4', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Carrazeda de Ansiães','district_id'=>'4', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Freixo de Espada à Cinta','district_id'=>'4', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Macedo de Cavaleiros','district_id'=>'4', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Miranda do Douro','district_id'=>'4', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Mirandela','district_id'=>'4', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Mogadouro','district_id'=>'4', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Torre de Moncorvo','district_id'=>'4', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vila Flor','district_id'=>'4', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vimioso','district_id'=>'4', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vinhais','district_id'=>'4', 'created_at' => now(), 'updated_at' => now()],
            //castelo branco
            ['name'=>'Belmonte','district_id'=>'5', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Castelo Branco','district_id'=>'5', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Covilhã','district_id'=>'5', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Fundão','district_id'=>'5', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Idanha-a-Nova','district_id'=>'5', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Oleiros','district_id'=>'5', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Penamacor','district_id'=>'5', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Proença-a-Nova','district_id'=>'5', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Sertã','district_id'=>'5', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vila de Rei','district_id'=>'5', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vila Velha de Ródão','district_id'=>'5', 'created_at' => now(), 'updated_at' => now()],
            //coimbra
            ['name'=>'Arganil','district_id'=>'6', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Cantanhede','district_id'=>'6', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Coimbra','district_id'=>'6', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Condeixa-a-Nova','district_id'=>'6', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Figueira da Foz','district_id'=>'6', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Góis','district_id'=>'6', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Lousã','district_id'=>'6', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Mira','district_id'=>'6', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Miranda do Corvo','district_id'=>'6', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Montemor-o-Velho','district_id'=>'6', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Oliveira do Hospital','district_id'=>'6', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Pampilhosa da Serra','district_id'=>'6', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Penacova','district_id'=>'6', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Penela','district_id'=>'6', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Soure','district_id'=>'6', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Tábua','district_id'=>'6', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vila Nova de Poiares','district_id'=>'6', 'created_at' => now(), 'updated_at' => now()],
            //évora
            ['name'=>'Alandroal','district_id'=>'7', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Arraiolos','district_id'=>'7', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Borba','district_id'=>'7', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Estremoz','district_id'=>'7', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Évora','district_id'=>'7', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Montemor-o-Novo','district_id'=>'7', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Mora','district_id'=>'7', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Mourão','district_id'=>'7', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Portel','district_id'=>'7', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Redondo','district_id'=>'7', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Reguengos de Monsaraz','district_id'=>'7', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vendas Novas','district_id'=>'7', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Viana do Alentejo','district_id'=>'7', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vila Viçosa','district_id'=>'7', 'created_at' => now(), 'updated_at' => now()],
            //faro
            ['name'=>'Albufeira','district_id'=>'8', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Alcoutim','district_id'=>'8', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Aljezur','district_id'=>'8', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Castro Marim','district_id'=>'8', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Faro','district_id'=>'8', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Lagoa','district_id'=>'8', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Lagos','district_id'=>'8', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Loulé','district_id'=>'8', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Monchique','district_id'=>'8', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Olhão','district_id'=>'8', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Portimão','district_id'=>'8', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'São Brás de Alportel','district_id'=>'8', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Silves','district_id'=>'8', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Tavira','district_id'=>'8', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vila do Bispo','district_id'=>'8', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vila Real de Santo António','district_id'=>'8', 'created_at' => now(), 'updated_at' => now()],
            //guarda
            ['name'=>'Aguiar da Beira','district_id'=>'9', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Almeida','district_id'=>'9', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Celorico da Beira','district_id'=>'9', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Figueira de Castelo Rodrigo','district_id'=>'9', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Fornos de Algodres','district_id'=>'9', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Gouveia','district_id'=>'9', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Guarda','district_id'=>'9', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Manteigas','district_id'=>'9', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Mêda','district_id'=>'9', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Pinhel','district_id'=>'9', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Sabugal','district_id'=>'9', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Seia','district_id'=>'9', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Trancoso','district_id'=>'9', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vila Nova de Foz Côa','district_id'=>'9', 'created_at' => now(), 'updated_at' => now()],
            //leiria
            ['name'=>'Alcobaça','district_id'=>'10', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Alvaiázere','district_id'=>'10', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Ansião','district_id'=>'10', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Batalha','district_id'=>'10', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Bombarral','district_id'=>'10', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Caldas da Rainha','district_id'=>'10', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Castanheira de Pêra','district_id'=>'10', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Figueiró dos Vinhos','district_id'=>'10', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Leiria','district_id'=>'10', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Marinha Grande','district_id'=>'10', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Nazaré','district_id'=>'10', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Óbidos','district_id'=>'10', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Pedrógão Grande','district_id'=>'10', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Peniche','district_id'=>'10', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Pombal','district_id'=>'10', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Porto de Mós','district_id'=>'10', 'created_at' => now(), 'updated_at' => now()],
            //lisboa
            ['name'=>'Alenquer','district_id'=>'11', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Amadora','district_id'=>'11', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Arruda dos Vinhos','district_id'=>'11', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Azambuja','district_id'=>'11', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Cadaval','district_id'=>'11', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Cascais','district_id'=>'11', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Lisboa','district_id'=>'11', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Loures','district_id'=>'11', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Lourinhã','district_id'=>'11', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Mafra','district_id'=>'11', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Odivelas','district_id'=>'11', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Oeiras','district_id'=>'11', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Sintra','district_id'=>'11', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Sobral de Monte Agraço','district_id'=>'11', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Torres Vedras','district_id'=>'11', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vila Franca de Xira','district_id'=>'11', 'created_at' => now(), 'updated_at' => now()],
            //portalegre
            ['name'=>'Alter do Chão','district_id'=>'12', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Arronches','district_id'=>'12', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Avis','district_id'=>'12', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Campo Maior','district_id'=>'12', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Castelo de Vide','district_id'=>'12', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Crato','district_id'=>'12', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Elvas','district_id'=>'12', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Fronteira','district_id'=>'12', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Gavião','district_id'=>'12', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Marvão','district_id'=>'12', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Monforte','district_id'=>'12', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Nisa','district_id'=>'12', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Ponte de Sor','district_id'=>'12', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Portalegre','district_id'=>'12', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Sousel','district_id'=>'12', 'created_at' => now(), 'updated_at' => now()],
            //porto
            ['name'=>'Amarante','district_id'=>'13', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Baião','district_id'=>'13', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Felgueiras','district_id'=>'13', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Gondomar','district_id'=>'13', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Lousada','district_id'=>'13', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Maia','district_id'=>'13', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Marco de Canaveses','district_id'=>'13', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Matosinhos','district_id'=>'13', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Paços de Ferreira','district_id'=>'13', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Paredes','district_id'=>'13', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Penafiel','district_id'=>'13', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Porto','district_id'=>'13', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Póvoa de Varzim','district_id'=>'13', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Santo Tirso','district_id'=>'13', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Trofa','district_id'=>'13', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Valongo','district_id'=>'13', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vila do Conde','district_id'=>'13', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vila Nova de Gaia','district_id'=>'13', 'created_at' => now(), 'updated_at' => now()],
            //santarém
            ['name'=>'Abrantes','district_id'=>'14', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Alcanena','district_id'=>'14', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Almeirim','district_id'=>'14', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Alpiarça','district_id'=>'14', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Benavente','district_id'=>'14', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Cartaxo','district_id'=>'14', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Chamusca','district_id'=>'14', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Constância','district_id'=>'14', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Entroncamento','district_id'=>'14', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Ferreira do Zêzere','district_id'=>'14', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Golegã','district_id'=>'14', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Mação','district_id'=>'14', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Ourém','district_id'=>'14', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Rio Maior','district_id'=>'14', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Salvaterra de Magos','district_id'=>'14', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Santarém','district_id'=>'14', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Sardoal','district_id'=>'14', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Tomar','district_id'=>'14', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Torres Novas','district_id'=>'14', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vila Nova da Barquinha','district_id'=>'14', 'created_at' => now(), 'updated_at' => now()],
            //setúbal
            ['name'=>'Alcácer do Sal','district_id'=>'15', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Alcochete','district_id'=>'15', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Almada','district_id'=>'15', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Barreiro','district_id'=>'15', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Grândola','district_id'=>'15', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Moita','district_id'=>'15', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Montijo','district_id'=>'15', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Palmela','district_id'=>'15', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Santiago do Cacém','district_id'=>'15', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Seixal','district_id'=>'15', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Sesimbra','district_id'=>'15', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Setúbal','district_id'=>'15', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Sines','district_id'=>'15', 'created_at' => now(), 'updated_at' => now()],
            //viana do castelo
            ['name'=>'Arcos de Valdevez','district_id'=>'16', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Caminha','district_id'=>'16', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Melgaço','district_id'=>'16', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Monção','district_id'=>'16', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Paredes de Coura','district_id'=>'16', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Ponte da Barca','district_id'=>'16', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Ponte de Lima','district_id'=>'16', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Valença','district_id'=>'16', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Viana do Castelo','district_id'=>'16', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vila Nova de Cerveira','district_id'=>'16', 'created_at' => now(), 'updated_at' => now()],
            //vila real
            ['name'=>'Alijó','district_id'=>'17', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Boticas','district_id'=>'17', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Chaves','district_id'=>'17', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Mesão Frio','district_id'=>'17', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Mondim de Basto','district_id'=>'17', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Montalegre','district_id'=>'17', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Murça','district_id'=>'17', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Peso da Régua','district_id'=>'17', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Ribeira de Pena','district_id'=>'17', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Sabrosa','district_id'=>'17', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Santa Marta de Penaguião','district_id'=>'17', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Valpaços','district_id'=>'17', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vila Pouca de Aguiar','district_id'=>'17', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vila Real','district_id'=>'17', 'created_at' => now(), 'updated_at' => now()],
            //Viseu
            ['name'=>'Armamar','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Carregal do Sal','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Castro Daire','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Cinfães','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Lamego','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Mangualde','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Moimenta da Beira','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Mortágua','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Nelas','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Oliveira de Frades','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Penalva do Castelo','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Penedono','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Resende','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Santa Comba Dão','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'São João da Pesqueira','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'São Pedro do Sul','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Sátão','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Sernancelhe','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Tabuaço','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Tarouca','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Tondela','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vila Nova de Paiva','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Viseu','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'Vouzela','district_id'=>'18', 'created_at' => now(), 'updated_at' => now()]
        ];
        \DB::table('counties')->insert($data);



    }
}
