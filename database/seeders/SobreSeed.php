<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\sobre;
class SobreSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sobre = [
            [
                'img' => 'equipa.png',
                'featured' => '1',
            ],
            [
                'img' => 'equipaskate.png',
                'featured' => '1',
            ],
            [
                'img' => 'escolaskate.png',
                'featured' => '1',
            ]
        ];
        foreach ($sobre as $sobre) {
            sobre::create($sobre);
        }
    }
}
