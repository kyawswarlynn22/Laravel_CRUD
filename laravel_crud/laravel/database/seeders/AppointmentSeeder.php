<?php

namespace Database\Seeders;

use App\Models\appointment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        appointment::factory()->count(10)->create();
    }
}
