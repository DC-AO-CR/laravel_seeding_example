<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    // QUESTION: What is a factory?
    // QUESTION: Why do we use a factory and what does it have to do with a model?
    // QUESTION: Where are we using this in our codebase?

    // You can generate this model by using the command: './vendor/bin/sail artisan make:factory StudentFactory'.

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstName' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName()
        ];
    }
}
