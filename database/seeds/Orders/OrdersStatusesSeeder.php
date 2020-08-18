<?php

use Illuminate\Database\Seeder;

class OrdersStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            ['order_status_name' => 'Подтреждение', 'order_status_value' => 'Подтвержден'],
            ['order_status_name' => 'Подтреждение', 'order_status_value' => 'Не подтвержден'],
            ['order_status_name' => 'Оплата', 'order_status_value' => 'Оплачен'],
            ['order_status_name' => 'Оплата', 'order_status_value' => 'Частично оплачен'],
            ['order_status_name' => 'Оплата', 'order_status_value' => 'Не оплачен'],
            ['order_status_name' => 'Производство', 'order_status_value' => 'В работе'],
            ['order_status_name' => 'Производство', 'order_status_value' => 'Выполнен'],
        ];

        DB::table('orders_statuses')->insert($data);
    }
}
