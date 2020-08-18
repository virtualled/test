<?php

use Illuminate\Database\Seeder;

class OrdersProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['product_name' => '1250x1x12', 'product_quantity' => 2, 'product_unit_id' => 1, 'product_price' => 123, 'product_sum' => 1121, 'product_order_id' => 1],
            ['product_name' => '1250x1x13', 'product_quantity' => 3, 'product_unit_id' => 2, 'product_price' => 1222, 'product_sum' => 13123, 'product_order_id' => 2],
            ['product_name' => '1250x1x14', 'product_quantity' => 4, 'product_unit_id' => 3, 'product_price' => 331, 'product_sum' => 1231, 'product_order_id' => 2],
            ['product_name' => '1250x1x15', 'product_quantity' => 2, 'product_unit_id' => 1, 'product_price' => 1123, 'product_sum' => 132312, 'product_order_id' => 3],


        ];

        DB::table('orders_products')->insert($data);
    }
}
