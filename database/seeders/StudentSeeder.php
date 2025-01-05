<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Add 10 students to the database by using the factory in the Student model.
     */
    public function run(): void
    {
        Student::factory()
            ->count(10)
            ->create();
    }
}
