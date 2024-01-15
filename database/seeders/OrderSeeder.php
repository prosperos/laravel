<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Database\Factories\OrderItemFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::factory(30)->create()->each(function (Order $order){
           OrderItem::factory(random_int(1,5))->create([
                'order_id' => $order->id
           ]);
        });
    }
}
