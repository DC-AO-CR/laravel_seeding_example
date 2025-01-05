<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Student;

class StudentSeeder extends Seeder
{
    // QUESTION: What is a seeder?
    // QUESTION: Why do we use a seeder and what does it have to do with the database?
    // QUESTION: What does this seeder need to do its task?

    // You can generate this model by using the command: './vendor/bin/sail artisan make:seeder StudentSeeder'.

    public function run(): void
    {
        Student::factory()
            ->count(10)
            ->create();
    }
}
