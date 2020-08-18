<?php

use Illuminate\Database\Seeder;

class OrdersUnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            ['unit_name' => 'пог м'],
            ['unit_name' => 'т'],
            ['unit_name' => 'кг'],

        ];

        DB::table('orders_products_units')->insert($data);
    }
}
