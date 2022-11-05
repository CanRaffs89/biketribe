<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Meetup>
 */
class MeetupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'tags' => 'fixed, beginner, london',
            'host' => $this->faker->company(),
            'location' => $this->faker->city(),
            'date' => $this->faker->dayOfWeek(),
            'description' => $this->faker->paragraph()
        ];
    }
}
