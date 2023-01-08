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
            ['modalidades' => 'Surf', 'icon'=> 'surf_icon_aulas.png'],
            ['modalidades' => 'Skate', 'icon'=>'skate_icon_aulas.png'],
            ['modalidades' => 'BodyBoard', 'icon'=>'bodyboard_icon_aulas.png'],
            ['modalidades' => 'Downhill Skate', 'icon'=>'dhskate_icon_aulas.png'],
            ['modalidades' => 'Paddle Surf', 'icon'=>'paddle_icon_aulas.png']
        ];
        foreach ($desportos as $desporto){
            Desporto::create($desporto);
        }
    }
}
