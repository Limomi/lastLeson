<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert(
            [
                [

                    'name' => 'admin',
                    'patronymic' => 'admin',
                    'lastname' => 'admin',
                    'login' => 'adminka',
                    'tel' => '3228',
                    'email' => 'soap@mail.com',
                    'role' => 'admin',
                    'password' => Hash::make('password'),
                ]
            ]
        );
    }
}
