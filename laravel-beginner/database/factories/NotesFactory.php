<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notes>
 */
class NotesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titolo' => $this->faker->sentence(),
            'autore' => $this->faker->name(),
            'email' => $this->faker->companyEmail(),
            'tags' => 'web, laravel, css',
            'contenuto' => $this->faker->paragraph(4)

        ];
    }
}
