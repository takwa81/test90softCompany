<?php

namespace Database\Seeders;

use App\Models\Driver;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Driver::factory()->count(10)->create();
        Driver::factory(10)->create()->each(function ($driver) {
            $order = Order::factory()->make();
            $driver->order()->save($order)->each(function($order){
                $detail = OrderDetail::factory()->create(3);
                $order->details()->save($detail);
            });   
        });

    }
}
