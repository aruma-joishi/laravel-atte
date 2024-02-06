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
        $factory->define(App\Models\Attend::class,function (Faker $faker) {
            return [
                'attend' => '',
                'user_id' => $this->faker->numberBetween(1, 10),
            ];
        });
    }
}