<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\StudentSeeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\ProfessorSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            RolSeeder::class,
            UserSeeder::class,
            ProfessorSeeder::class,
            StudentSeeder::class,
            SubjectSeeder::class,
        ]);


    }
}
