<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //add dumby seed
        $user5 = \App\Models\User::create([
            'name' => "Ahmed",
            'email' =>"Ahmed212@laravel.com",
            'password'=>Hash::make('asdasdasd')
        ]);

        $user6 = \App\Models\User::create([
            'name' => "Nessma",
            'email' =>"Nessma12@laravel.com",
            'password'=>Hash::make('asdasdasd'),
        ]);

        Post::create([
            'user_id'=> $user5->id,
            'content'=>"I have been working at laravel for 5 years now WOW!",

        ]);


        Post::create([
            'user_id'=> $user6->id,
            'content'=>"I have been working at laravel for 1 years now",

        ]);
    }
}
