<?php

namespace Database\Seeders;


use App\Models\DesportoImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class desportoimageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $desportoImage = [
            ['image' => 'surf_homepage_img.png', 'desporto_id' => 1],
            ['image' => 'skate_homepage_img.png', 'desporto_id' => 2],
            ['image' => 'bodyboard_homepage_img.png', 'desporto_id' => 3],
            ['image' => 'dhskate_homepage_img.png', 'desporto_id' => 4],
            ['image' => 'psurf_homepage_img.png', 'desporto_id' => 5]
        ];
        foreach ($desportoImage as $desportoImages){
            DesportoImage::create($desportoImages);
        }
    }
}
