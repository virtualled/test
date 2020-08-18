<?php

use Illuminate\Database\Seeder;

class OrdersProductsDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['width' => 1, 'quantity' => 2, 'thickness' => 1, 'weight' => 1, 'sum' => 200500, 'warehouse_id' => 1, 'commodity_id' => 1, 'product_id' => 1],
            ['width' => 1, 'quantity' => 1, 'thickness' => 1, 'weight' => 2, 'sum' => 200500, 'warehouse_id' => 2, 'commodity_id' => 1, 'product_id' => 1],
            ['width' => 2, 'quantity' => 1, 'thickness' => 2, 'weight' => 3, 'sum' => 200500, 'warehouse_id' => 3, 'commodity_id' => 2, 'product_id' => 1],
            ['width' => 2, 'quantity' => 2, 'thickness' => 1, 'weight' => 4, 'sum' => 200500, 'warehouse_id' => 4, 'commodity_id' => 2, 'product_id' => 1],
            ['width' => 2, 'quantity' => 2, 'thickness' => 1, 'weight' => 4, 'sum' => 200500, 'warehouse_id' => 4, 'commodity_id' => 2, 'product_id' => 2],
            ['width' => 2, 'quantity' => 2, 'thickness' => 1, 'weight' => 4, 'sum' => 200500, 'warehouse_id' => 4, 'commodity_id' => 2, 'product_id' => 2],
            ['width' => 2, 'quantity' => 2, 'thickness' => 1, 'weight' => 4, 'sum' => 200500, 'warehouse_id' => 4, 'commodity_id' => 2, 'product_id' => 3],
            ['width' => 2, 'quantity' => 2, 'thickness' => 1, 'weight' => 4, 'sum' => 200500, 'warehouse_id' => 4, 'commodity_id' => 2, 'product_id' => 3],
            ['width' => 2, 'quantity' => 2, 'thickness' => 1, 'weight' => 4, 'sum' => 200500, 'warehouse_id' => 4, 'commodity_id' => 2, 'product_id' => 3],

        ];

        DB::table('orders_products_details')->insert($data);
    }
}
