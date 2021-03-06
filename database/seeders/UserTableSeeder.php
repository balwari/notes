<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $user = new User;
        $user->name = "Balwari Ikram";
        $user->email = "ikram1125@gmail.com";
        $user->password = bcrypt('ikram@123');
        $user->save();
    }
}
