<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert(
            [
                [
                    'title' => 'Общий клиниг',
                ],
                [
                    'title' => 'Генеральная уборка',
                ],
                [
                    'title' => 'Послестроительная уборка'
                ],
                [
                    'title' => 'Химчстка ковров'
                ]
            ]
            );
    }
}
