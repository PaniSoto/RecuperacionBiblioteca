<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ForHire>
 */
class ForHireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'forHire_date' => fake()->date(),
            'return_date' => fake()->date(),
            'status' => fake()->randomElement(['Pendiente', 'Aprobado', 'Rechazado']),
            'book_id' => fake()->numberBetween(1, 10),
            'librarian_id' => fake()->numberBetween(1, 10),
            'reader_id' => fake()->numberBetween(1, 10),
        ];
    }
}
