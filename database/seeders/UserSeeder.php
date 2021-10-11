<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Luis Gomes',
            'email' => 'luisgomesbcc@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'user',
            'img_profile_src' => 'https://pbs.twimg.com/profile_images/1299404636579717121/-W_TpI-H_400x400.jpg',
        ]);
    }
}
