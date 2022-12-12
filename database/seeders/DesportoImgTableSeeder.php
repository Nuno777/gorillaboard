<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DesportoImgTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('desporto_images')->truncate();
        Schema::enableForeignKeyConstraints();

        $desporto_img = [
            ['image' => 'surf_homepage_img.png', 'desporto_id' => 1],
            ['image' => 'skate_homepage_img.png', 'desporto_id' => 2],
            ['image' => 'bodyboard_homepage_img.png', 'desporto_id' => 3],
            ['image' => 'dhskate_homepage_img.png', 'desporto_id' => 4],
            ['image' => 'psurf_homepage_img.png', 'desporto_id' => 5],
        ];

        DB::table('desporto_images')->insert($desporto_img);
    }
}
