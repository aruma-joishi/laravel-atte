<?php

namespace Database\Factories;

use App\Models\Attend;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'attend' => $this->faker->dateTimeBetween($startDate = '-1 month', $endDate = '-1 day'),
            'leave' => $this->faker->dateTimeBetween($startDate = '-1 month', $endDate = '-1 day'),
            'worktime' => $this->faker->dateTimeBetween($startDate = '-1 month', $endDate = '-1 day'),
            'breakbegin' => $this->faker->dateTimeBetween($startDate = '-1 month', $endDate = '-1 day'),
            'breakend' => $this->faker->dateTimeBetween($startDate = '-1 month', $endDate = '-1 day'),
            'breaktime' => $this->faker->dateTimeBetween($startDate = '-1 month', $endDate = '-1 day'),
            'user_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
