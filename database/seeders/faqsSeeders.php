<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\faqs;
class faqsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqs = [
            [
                'pergunta' => 'Há aulas todos os dias?',
                'resposta' => 'Os dias das aulas são escolhidos através de dois fatores, número de alunos e condições meteorológicas, desta forma é possivél que nao existam aulas todos os dias da semana.',
            ],
            [
                'pergunta' => 'Posso marcar aulas privadas?',
                'resposta' => 'Sim! A Gorilla Boards disponibiliza a opção de aulas privadas.',
            ],
            [
                'pergunta' => 'É preciso levar o meu equipamento para as aulas ou é disponibilizado?',
                'resposta' => 'O equipamento é disponiblizado em todas as aulas, caso queira utilizar os seus equipamentos, sinta-se a vontade.',
            ],[
                'pergunta' => 'Quantas pessoas pode ter uma aula?',
                'resposta' => 'O número máximo de participantes numa aula é 20 alunos e o mínimo é 10 alunos.',
            ],
        ];
        foreach ($faqs as $faqs) {
            faqs::create($faqs);
        }
    }
}
