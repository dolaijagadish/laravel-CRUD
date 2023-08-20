<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;



class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        $user = new User;

        $user::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'isAdmin' => '1',
        ]);
        $user::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'isAdmin' => '0',
        ]);

        for($i=1; $i<10; $i++){
            $user::create([
                'name' => 'User'.$i,
                'email' => 'user'.$i.'@gmail.com',
                'password' => Hash::make('password'),
                'isAdmin' => '0',
            ]);
        }
    }
}