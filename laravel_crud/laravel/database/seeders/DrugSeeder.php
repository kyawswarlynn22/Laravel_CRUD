<?php

namespace Database\Seeders;

use App\Models\drug;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DrugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        drug::factory()->count(10)->create();
    }
}
