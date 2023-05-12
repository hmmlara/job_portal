<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobPost>
 */
class JobPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'skill' => $this->faker->realText($maxNbChars = 15, $indexSize = 2),
            // 'requirement' => $this->faker->realText($maxNbChars = 20, $indexSize = 2),
            // 'deadline' => $this->faker->dateTimeAD($max = 'now', $timezone = null),
            // 'description' => $this->faker->paragraph,
            // 'status' => $this->faker->numberBetween($min = 1, $max = 5)
        ];
    }
}
