<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommodityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ 'commodity_name' => 'Рулон 1', 'purchase_price' => 4000, 'weight' => 5.4, 'balance' => 5.4, 'thickness' => 1, 'width' => 1250, 'warehouse_id' => 1],
            [ 'commodity_name' => 'Рулон 2', 'purchase_price' => 3000, 'weight' => 2.4, 'balance' => 2.4, 'thickness' => 2, 'width' => 1250, 'warehouse_id' => 1],
            [ 'commodity_name' => 'Рулон 3', 'purchase_price' => 2000, 'weight' => 4.4, 'balance' => 4.4, 'thickness' => 3, 'width' => 1250, 'warehouse_id' => 1],
            [ 'commodity_name' => 'Рулон 4', 'purchase_price' => 1000, 'weight' => 11.4, 'balance' => 11.4, 'thickness' => 4, 'width' => 1250, 'warehouse_id' => 3],
            [ 'commodity_name' => 'Рулон 12', 'purchase_price' => 4000, 'weight' => 5.4, 'balance' => 5.4, 'thickness' => 1, 'width' => 1250, 'warehouse_id' => 3],
            [ 'commodity_name' => 'Рулон 23', 'purchase_price' => 3000, 'weight' => 2.4, 'balance' => 2.4, 'thickness' => 2, 'width' => 1250, 'warehouse_id' => 3],
            [ 'commodity_name' => 'Рулон 31', 'purchase_price' => 2000, 'weight' => 4.4, 'balance' => 4.4, 'thickness' => 3, 'width' => 1250, 'warehouse_id' => 2],
            [ 'commodity_name' => 'Рулон 43', 'purchase_price' => 1000, 'weight' => 11.4, 'balance' => 11.4, 'thickness' => 4, 'width' => 1250, 'warehouse_id' => 2],

        ];


        DB::table('commodities')->insert($data);
    }
}
