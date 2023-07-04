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
            'location' => $this->faker->city(),
            'date' => $this->faker->dayOfWeek(),
            'time' => $this->faker->time(),
            'description' => $this->faker->paragraph()
        ];
    }
}
