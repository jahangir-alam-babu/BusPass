<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::Create([
            'name' => "Admin",
            'email' => "admin@demo.com",
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);
    }
}
