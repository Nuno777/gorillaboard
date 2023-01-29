<?php

namespace Database\Seeders;

use App\Models\Aula;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aulas = [
            ['local_aulas' => 'Peniche', 'data_aulas' => '2023-01-10', 'formador_id' => 1, 'desporto_id' => 1],
            ['local_aulas' => 'Ericeira', 'data_aulas' => '2023-01-09', 'formador_id' => 2, 'desporto_id' => 2],
            ['local_aulas' => 'Serra da Estrela', 'data_aulas' => '2023-01-14', 'formador_id' => 3, 'desporto_id' => 3],
            ['local_aulas' => 'Sines', 'data_aulas' => '2023-01-20', 'formador_id' => 4, 'desporto_id' => 4],
            ['local_aulas' => 'Nazaré', 'data_aulas' => '2023-01-16', 'formador_id' => 5, 'desporto_id' => 5],
        ];
        foreach ($aulas as $aula){
            Aula::create($aula);
        }
    }
}
