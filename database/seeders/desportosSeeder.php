<?php

namespace Database\Seeders;

use App\Models\Desporto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class desportosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $desportos = [
            ['modalidades' => 'Surf'],
            ['modalidades' => 'BodyBaord'],
            ['modalidades' => 'Paddle'],
            ['modalidades' => 'Skate'],
            ['modalidades' => 'Downhill Skate']
        ];
        foreach ($desportos as $desporto){
            Desporto::create($desporto);
        }
    }
}
