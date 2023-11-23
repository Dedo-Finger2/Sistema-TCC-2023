<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->nome = "user";
        $user->email = "user@user.com";
        $user->password = bcrypt("123");
        $user->address_id = 1;
        $user->save();
    }
}
