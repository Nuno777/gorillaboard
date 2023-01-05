<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
                'password' => '$2y$10$k9NwpyPGi9iBFNwwCZ2xeOW9FgMEKl.tGQHJzhJhbGl6Zvd5igz4K',
                'img' => 'miguel.png',
                'admin' => '1',
            ],
            [
                'name' => 'Roman',
                'email' => 'romankalyuzhnov@gmail.com',
                'email_verified_at'=>'2023-01-03 13:19:13',
                'password' => '$2y$10$zulASHlfbkbtYG5NW3hLpOxG/tXWoaVkYrY7PClIiqjRLb5spCA7S',
                'img' => 'roman.png',
                'admin' => '1',
            ],
            [
                'name' => 'Nuno',
                'email' => 'nm.albano11@gmail.com',
                'email_verified_at'=>'2023-01-03 13:19:13',
                'password' => '$2y$10$SFV/E7B67xtyHUnuvCgCSuqlvcumed0VYvPvP.jYnhH5a/7O2RwY2',
                'img' => 'nuno.png',
                'admin' => '1',
            ],
            [
                'name' => 'Joel',
                'email' => '2211727@my.ipleiria.pt',
                'email_verified_at'=>'2023-01-03 13:19:13',
                'password' => '$2y$10$mgokqZhfweUXPqFHAEGzyOL0HXJX6MhXMzGfuyfXDp6Z4zS7WKGS.',
                'img' => 'joel.png',
                'admin' => '1',
            ],
            [
                'name' => 'Tmarques',
                'email' => '2213032@ipleiria.pt',
                'email_verified_at'=>'2023-01-03 13:19:13',
                'password' => '$2y$10$4o.lW.thkJgi/KxrVf2O2uWUbGMcDO4Xd8izjg0tkJy9.yzKrSWlK',
                'img' => 'tiago.png',
                'admin' => '1',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
