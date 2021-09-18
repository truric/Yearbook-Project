<?php

use Illuminate\Database\Seeder;

class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('degrees')->insert([
            'name' => 'Curso de Técnico/a Especialista em Mecatrónica Automóvel, Planeamento e Controlo de Processos',
            'code' => 'MAPCC',
            'area_id' => '1',
            'description' => 'O/A Técnico/a Especialista em Mecatrónica Automóvel, Planeamento e Controlo de Processos é o/a profissional que vai proceder ao planeamento e controlo de processos de manutenção e reparação automóvel em oficinas, supervisionando os trabalhos de deteção e reparação de avarias nos sistemas mecânicos, elétricos e eletrónicos de veículos automóveis ligeiros e pesados, tendo em vista a maximização da produtividade da oficina de manutenção e reparação automóvel, no respeito pelas normas de segurança ambiental e de higiene e saúde no trabalho.
                                Os CETs na ATEC atribuem equivalências em Cursos do Ensino Superior
                                A ATEC tem protocolos com Universidades e Politécnicos que dão equivalência de créditos aos seus formandos dos Cursos de Especialização Tecnológica que pretendam ingressar no ensino superior no final do seu curso. Para saberes mais informações dirige-te à Instituição de Ensino Superior onde te pretendes inscrever.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('degrees')->insert([
            'name' => 'Curso de Técnico/a de Mecatrónica Automóvel',
            'code' => 'MA',
            'area_id' => '1',
            'description' => 'O automóvel é por excelência um produto que utiliza tecnologia, materiais e equipamentos inovadores e tecnologicamente avançados. Torna-se, por isso, essencial formar jovens técnicos para aumentar a qualidade do capital humano das empresas, de forma a integrarem quadros empreendedores tecnicamente competentes, com elevada flexibilidade e criatividade.
                                Este curso permite a conclusão do ensino secundário e, prepara em profundidade o Formando para cumprir as tarefas multi-facetadas exigidas para os profissionais nas oficinas, nas áreas da mecânica, eletricidade, eletrónica e diagnóstico. Confere-lhe excelentes oportunidades de emprego e de criação da sua própria empresa, motivação e desenvolvimento pessoal.
                                O/A Técnico/a de Mecatrónica Automóvel é o/a responsável pelo diagnóstico e reparação dos sistemas mecânicos, elétricos e eletrónicos de veículos automóveis.',
            'created_at' => now(),
            'updated_at' => now()
        ]);


        DB::table('degrees')->insert([
            'name' => 'Curso de Técnico/a Especialista em Gestão de Redes e Sistemas Informáticos',
            'code' => 'GRSI',
            'area_id' => '2',
            'description' => 'Empresas e organizações, dos mais variados segmentos, dependem cada vez mais das novas tecnologias, que são um fator de vantagem competitiva em qualquer mercado. Assim, os técnicos especializados, capazes de assegurarem os meios necessários (Hardware e Software) e a fiabilidade das redes de computadores, são cada vez mais requisitados pelas empresas. Sabendo dessa necessidade do mercado a ATEC, através do curso de Gestão de Redes e Sistemas Informáticos, atribui aos formandos conhecimentos nas áreas das Comunicações, Sistemas Operativos, Redes de Computadores, Comunicações de Dados, Administração de Redes e Projeto, e de redes informáticas.
                                Este curso, baseado no conceito do "saber fazer", onde as vertentes práticas e teóricas se complementam com predominância da primeira, tem como objetivo colmatar as carências profissionais desta área, contribuindo para a motivação e para o desenvolvimento pessoal do formando, bem como para a atribuição de competências e conhecimentos capazes de proporcionar oportunidades de emprego aliciantes.
                                Os CETs na ATEC atribuem equivalências em Cursos do Ensino Superior
                                A ATEC tem protocolos com Universidades e Politécnicos que dão equivalência de créditos aos seus formandos dos Cursos de Especialização Tecnológica que pretendam ingressar no ensino superior no final do seu curso. Para saberes mais informações dirige-te à Instituição de Ensino Superior onde te pretendes inscrever',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('degrees')->insert([
            'name' => 'Curso de Técnico/a Especialista em Tecnologias e Programação de Sistemas de Informação',
            'code' => 'TPSI',
            'area_id' => '2',
            'description' => 'O Curso de Especialização em Tecnologias e Programação de Sistemas de Informação tem por objetivo principal analisar, conceber, planear e desenvolver soluções de Tecnologias e Programação de Sistemas de Informação e/ou soluções de integração de sistemas existentes.
                                Os CETs na ATEC atribuem equivalências em Cursos do Ensino Superior
                                A ATEC tem protocolos com Universidades e Politécnicos que dão equivalência de créditos aos seus formandos dos Cursos de Especialização Tecnológica que pretendam ingressar no ensino superior no final do seu curso. Para saberes mais informações dirige-te à Instituição de Ensino Superior onde te pretendes inscrever.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('degrees')->insert([
            'name' => 'Curso de Técnico/a Especialista em Cibersegurança',
            'code' => 'CISEG',
            'area_id' => '2',
            'description' => 'O Curso de Técnico/a Especialista em Cibersegurança permite aos formandos implementar e gerir plataformas e sistemas de cibersegurança em organizações, bem como intervir em 1ª linha em incidentes de cibersegurança.
                                    Os CETs na ATEC atribuem equivalências em Cursos do Ensino Superior
                                    A ATEC tem protocolos com Universidades e Politécnicos que dão equivalência de créditos aos seus formandos dos Cursos de Especialização Tecnológica que pretendam ingressar no ensino superior no final do seu curso. Para saberes mais informações dirige-te à Instituição de Ensino Superior onde te pretendes inscrever.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('degrees')->insert([
            'name' => 'Curso de Técnico/a de Informática - Instalação e Gestão de Redes',
            'code' => 'IIGR',
            'area_id' => '2',
            'description' => 'O/A Técnico/a de Informática - Instalação e Gestão de Redes efetua a instalação, a configuração e a manutenção de redes informáticas e dos equipamentos de apoio à estrutura de redes, procedendo à implementação dos níveis de segurança adequados, assegurando a otimização do seu funcionamento e respeitando as normas de segurança, higiene e saúde no trabalho e de proteção do ambiente.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('degrees')->insert([
            'name' => 'Curso de Programador/a de Informática',
            'code' => 'PI',
            'area_id' => '2',
            'description' => 'O/A Programador/a de Informática efetua a análise de sistemas, a gestão de base de dados, desenvolve aplicações e procede à instalação e manutenção de equipamentos e aplicações informáticas de escritório, utilitários e de gestão, assegurando a otimização do seu funcionamento e respeitando as normas de segurança, higiene e saúde no trabalho e de proteção do ambiente.',
            'created_at' => now(),
            'updated_at' => now()
        ]);


        DB::table('degrees')->insert([
            'name' => 'Curso de Técnico/a de Mecatrónica',
            'code' => 'MECA',
            'area_id' => '3',
            'description' => 'O/A Técnico/a de Mecatrónica efetua a instalação, manutenção, reparação e adaptação de equipamentos diversos, nas áreas de eletricidade, eletrónica, controlo automático, robótica e mecânica assegurando a otimização do seu funcionamento, respeitando as normas de segurança de pessoas e equipamentos.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('degrees')->insert([
            'name' => 'Curso de Técnico/a de Manutenção Industrial de Metalurgia e Metalomecânica',
            'code' => 'MIMM',
            'area_id' => '3',
            'description' => 'O/A Técnico/a de Manutenção Industrial de Metalurgia e Metalomecânica vai orientar e desenvolver os trabalhos na área da manutenção, relativamente à preparação, inspeção e manutenção de equipamentos industriais.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('degrees')->insert([
            'name' => 'Curso de Técnico/a Especialista em Tecnologia Mecatrónica',
            'code' => 'TM',
            'area_id' => '3',
            'description' => 'O Curso de Especialização em Tecnologia Mecatrónica tem por objetivo desenvolver atividades nas áreas de projeto, planeamento, fabrico e manutenção, integrando tecnologias de mecânica, eletrotecnia, automação e informática, com vista ao desenvolvimento de produtos, sistemas e processos melhorados, conducentes a um aumento da qualidade e produtividade.
                                Os CETs na ATEC atribuem equivalências em Cursos do Ensino Superior
                                A ATEC tem protocolos com Universidades e Politécnicos que dão equivalência de créditos aos seus formandos dos Cursos de Especialização Tecnológica que pretendam ingressar no ensino superior no final do seu curso. Para saberes mais informações dirige-te à Instituição de Ensino Superior onde te pretendes inscrever.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('degrees')->insert([
            'name' => 'Curso de Técnico/a de Refrigeração e Climatização',
            'code' => 'RC',
            'area_id' => '3',
            'description' => 'O/A Técnico/a de Refrigeração e Climatização programa, organiza e coordena a execução da instalação e da manutenção de sistemas comerciais e industriais de refrigeração ou de sistemas domésticos, comerciais e industriais de climatização, de acordo com as normas de higiene, segurança e ambiente.
                                No final do curso, os formandos podem:
                                continuar os estudos para um Curso de Especialização Tecnológica ou prosseguir para oEnsino Superior;
                                ingressar no mercado de trabalho em empresas de instalação, manutenção e reparação de equipamentos de frio e climatização e/ou empresas de construção, montagem e manutenção de sistemas de frio, ar condicionado, aquecimento.',
            'created_at' => now(),
            'updated_at' => now()
        ]);


        DB::table('degrees')->insert([
            'name' => 'Curso de Técnico/a de Soldadura (EFA+ 23 anos)',
            'code' => 'SOLD23',
            'area_id' => '4',
            'description' => 'O Técnico/a de Soldadura é o/a profissional responsável por planear e executar trabalho de soldadura, efetuando a escolha dos processos, equipamentos e materiais de adição a utilizar de acordo com instruções técnicas, respeitando as normas de segurança, higiene, saúde no trabalho e de proteção do ambiente.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('degrees')->insert([
            'name' => 'Curso de Técnico/a de Soldadura',
            'code' => 'SOLD',
            'area_id' => '4',
            'description' => 'O/A Técnico/a de Soldadura planeia e executa o trabalho de soldadura, efetuando a escolha dos processos, equipamentos e materiais de adição a utilizar de acordo com as instruções técnicas, respeitando as normas de segurança, higiene e saúde no trabalho e de proteção do ambiente.',
            'created_at' => now(),
            'updated_at' => now()
        ]);


        DB::table('degrees')->insert([
            'name' => 'Curso de Técnico/a de Eletrónica - Automação e Comando (EFA +23 Anos)',
            'code' => 'EAC23',
            'area_id' => '5',
            'description' => 'O curso tem como objetivo qualificar os formandos com vista ao exercício da profissão de Técnico/a de Eletrónica, Automação e Comando. Pretende-se igualmente dotar os formandos de capacidades de adaptação rápida às mutações tecnológicas bem como ao espírito de formação contínua.
                                O/A Técnico/a de Eletrónica, Automação e Comando é o/a profissional que efetua a instalação, manutenção e reparação de equipamentos elétricos/eletrónicos, eletromecânicos e de automação e comando, assegurando a otimização do seu funcionamento, respeitando as normas de segurança de pessoas e equipamentos.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('degrees')->insert([
            'name' => 'Curso de Técnico/a de Eletrónica e Telecomunicações',
            'code' => 'ET',
            'area_id' => '5',
            'description' => 'O/A Técnico/a de Eletrónica e Telecomunicações é o profissional qualificado apto a desempenhar tarefas de carácter técnico relacionadas com a instalação, utilização, manutenção e reparação de materiais e equipamentos eletrónicos de telecomunicações, no respeito pelas normas de higiene e segurança e pelos regulamentos específicos.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('degrees')->insert([
            'name' => 'Curso de Técnico/a de Eletrónica, Automação e Comando',
            'code' => 'EAC',
            'area_id' => '5',
            'description' => 'O curso tem como objetivo qualificar os formandos com vista ao exercício da profissão de Técnico/a de Eletrónica, Automação e Comando. Pretende-se igualmente dotar os formandos de capacidades de adaptação rápida às mutações tecnológicas bem como ao espírito de formação contínua.
                                O/A Técnico/a de Eletrónica, Automação e Comando é o/a profissional que efetua a instalação, manutenção e reparação de equipamentos elétricos/eletrónicos, eletromecânicos e de automação e comando, assegurando a otimização do seu funcionamento, respeitando as normas de segurança de pessoas e equipamentos.',
            'created_at' => now(),
            'updated_at' => now()
        ]);


        DB::table('degrees')->insert([
            'name' => 'Curso de Técnico/a Especialista em Automação Robótica e Controlo Industrial',
            'code' => 'EARCI',
            'area_id' => '6',
            'description' => 'O Curso de Especialização em Automação, Robótica e Controlo Industrial tem por objetivo principal proporcionar conhecimentos avançados em sistemas automáticos de produção, baseados nas mais modernas tecnologias disponíveis na Indústria. Pretende-se em particular formar técnicos com capacidade para dominar o vasto e interdisciplinar mundo da Automação Industrial, de forma a serem capazes de formular e modelar um processo automático de fabrico, atribuindo-lhes a capacidade de projetar e implementar circuitos de comando baseados em autómatos programáveis.
                                A indústria de hoje utiliza cada vez mais sistemas de produção robotizados, baseados nos mais modernos sistemas de automação industrial, com base em sistemas computorizados, que utilizam a robótica como sistema de interface com os operadores humanos, com o objetivo de realizar com máquinas inteligentes e altamente produtivas, as tarefas repetitivas e monótonas. Nessas tarefas as máquinas estão mais bem adaptadas, e permitem libertar a atividade humana para tarefas mais condizentes com a sua condição.
                                Os CETs na ATEC atribuem equivalências em Cursos do Ensino Superior
                                A ATEC tem protocolos com Universidades e Politécnicos que dão equivalência de créditos aos seus formandos dos Cursos de Especialização Tecnológica que pretendam ingressar no ensino superior no final do seu curso. Para saberes mais informações dirige-te à Instituição de Ensino Superior onde te pretendes inscrever.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('degrees')->insert([
            'name' => 'Curso de Técnico/a de Maquinação e Programação CNC',
            'code' => 'MPCNC',
            'area_id' => '3',
            'description' => 'O Técnico/a de Maquinação e Programação CNC opera e programa máquinas ferramentas CNC e fabrico assistido por computador, através dos princípios básicos de comando numérico computorizado.',
            'created_at' => now(),
            'updated_at' => now()
        ]);


    }
}
