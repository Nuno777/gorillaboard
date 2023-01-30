<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sobre_texto;

class SobretextoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sobre_texto = [
            ['texto' => 'Gorilla Boards é uma escola de desportos de pranchas com instrutores qualificados, oferecendo aulas de surf, bodyboard, skate e stand-up paddle. Fornece equipamentos de alta qualidade para aulas seguras e divertidas na praia. Venha experimentar a emoção de surfar com Gorilla Boards.'],
            ['texto' => 'Os fundadores da Gorilla Boards são apaixonados por desportos de prancha e partilham esse amor através da criação da escola. Eles procuram ensinar habilidades seguras e divertidas aos alunos, com instrutores altamente qualificados e equipamentos de alta qualidade. Juntos, tornaram a Gorilla Boards uma escola respeitada na comunidade de desportos de prancha.'],
        ];
        foreach ($sobre_texto as $sobre_texto){
            Sobre_texto::create($sobre_texto);
        }
    }
}
