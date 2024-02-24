<?php

use App\User;
use Illuminate\Support\Str;
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
        User::truncate();
        User::create([
            'name' => 'admin perpustakaan',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin111'),
            'remember_token' => Str::random(60),
        ]);
    }
}
