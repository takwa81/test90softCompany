<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $order = Order::all();

        $start_date = $this->faker->dateTimeBetween('+0 days', '+1 month');
        $start_date_clone = clone $start_date;

        $end_date = $this->faker->dateTimeBetween($start_date, $start_date_clone->modify('+5 hours'));
        // $start_date = $this->faker->dateTimeBetween('+0 days', '+1 month');
        // $end_date = $this->faker->dateTimeBetween($start_date, $start_date->modify('+5 hours'));

        return [
            'date' => $this->faker->date($format = 'm-d-Y', $min = 'now'),
            'from_time' => $start_date,
            'to_time' => $end_date,
            'order_id' => $this->faker->numberBetween(1, $order->count()),
        ];
    }
}
