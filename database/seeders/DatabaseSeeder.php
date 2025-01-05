<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // QUESTION: What is the main task of this class?
    // QUESTION: Why are we doing the main task in this way?

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(StudentSeeder::class);
    }
}
