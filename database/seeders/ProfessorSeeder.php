<?php

namespace Database\Seeders;

use App\Models\Professor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Professor::create(['dni' => '26119392','name' => 'Rosa','lastname' => 'Mendoza' ]);
    }
}
