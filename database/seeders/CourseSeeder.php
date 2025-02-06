<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create(['description' => '1er ']);
        Course::create(['description' => '2do ']);
        Course::create(['description' => '3do ']);
        Course::create(['description' => '4to ']);
        Course::create(['description' => '5to ']);
        Course::create(['description' => '6to ']);
    }
}
