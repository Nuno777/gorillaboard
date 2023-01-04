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
            ['modalidades' => 'Skate'],
            ['modalidades' => 'BodyBoard'],
            ['modalidades' => 'Downhill Skate'],
            ['modalidades' => 'Paddle Surf']
        ];
        foreach ($desportos as $desporto){
            Desporto::create($desporto);
        }
    }
}
