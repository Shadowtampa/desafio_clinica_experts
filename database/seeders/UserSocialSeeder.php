<?php

namespace Database\Seeders;

use App\Models\UserSocial;
use Illuminate\Database\Seeder;

class UserSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserSocial::create([
            'id_user' => 1,
            'id_social' => 1,
        ]);
    }
}
