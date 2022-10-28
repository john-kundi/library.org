<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->title,
            'author' => $this->faker->text,
            'published_date' => $this->faker->date,
            'category' => $this->faker->text,
            'shelf' => $this->faker->text,
            'pdf' => $this->faker->bookcover,
        ];
    }
}
