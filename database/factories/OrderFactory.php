<?php

namespace Database\Factories;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $driver = Driver::all();
        return [
            'distance' => $this->faker->randomFloat('5',0,5),
            'driver_id' => $this->faker->unique()->numberBetween(1, $driver->count())
        ];
    }
}
