<?php

use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['order_name' => '1', 'order_date' => '2020-08-12', 'order_status_id' => 1, 'order_payment_id' => 4, 'order_sum' => 200500, 'order_shipment_date' => '2020-08-23', 'order_client_id' => '2', 'order_manager_id' => 1],
            ['order_name' => '2', 'order_date' => '2020-08-12', 'order_status_id' => 2, 'order_payment_id' => 4, 'order_sum' => 200500, 'order_shipment_date' => '2020-08-23', 'order_client_id' => '3', 'order_manager_id' => 1],
            ['order_name' => '3', 'order_date' => '2020-08-12', 'order_status_id' => 3, 'order_payment_id' => 5, 'order_sum' => 200500, 'order_shipment_date' => '2020-08-23', 'order_client_id' => '4', 'order_manager_id' => 1],

        ];

        DB::table('orders')->insert($data);
    }
}
