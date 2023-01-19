<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Miguel',
                'email' => 'mmjm.1997@gmail.com',
                'email_verified_at'=>'2023-01-03 13:19:13',
                'password' => Hash::make('123123123'),
                'img' => 'miguel.png',
                'admin' => '1',
            ],
            [
                'name' => 'Roman',
                'email' => 'romankalyuzhnov@gmail.com',
                'email_verified_at'=>'2023-01-03 13:19:13',
                'password' => Hash::make('123123123'),
                'img' => 'roman.png',
                'admin' => '1',
            ],
            [
                'name' => 'Nuno',
                'email' => 'nm.albano11@gmail.com',
                'email_verified_at'=>'2023-01-03 13:19:13',
                'password' => Hash::make('123123123'),
                'img' => 'nuno.png',
                'admin' => '1',
            ],
            [
                'name' => 'Joel',
                'email' => '2211727@my.ipleiria.pt',
                'email_verified_at'=>'2023-01-03 13:19:13',
                'password' => Hash::make('1231231233'),
                'img' => 'joel.png',
                'admin' => '1',
            ],
            [
                'name' => 'Tmarques',
                'email' => '2213032@ipleiria.pt',
                'email_verified_at'=>'2023-01-03 13:19:13',
                'password' => Hash::make('123456789'),
                'img' => 'tiago.png',
                'admin' => '1',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
