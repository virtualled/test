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
            [ 'commodity_name' => 'Рулон 1', 'purchase_price' => 4000, 'purchase_sum' => 567000,  'weight' => 3, 'balance' => 5.4, 'thickness' => 1, 'width' => 3, 'warehouse_id' => 1, 'manufacturer_id' => 2, 'owner_id' => 1],
            [ 'commodity_name' => 'Рулон 2', 'purchase_price' => 3000, 'purchase_sum' => 567000,  'weight' => 3, 'balance' => 2.4, 'thickness' => 2, 'width' => 3, 'warehouse_id' => 1, 'manufacturer_id' => 2, 'owner_id' => 1],
            [ 'commodity_name' => 'Рулон 3', 'purchase_price' => 2000, 'purchase_sum' => 567000,  'weight' => 3, 'balance' => 4.4, 'thickness' => 2, 'width' => 4, 'warehouse_id' => 1, 'manufacturer_id' => 2, 'owner_id' => 1],
            [ 'commodity_name' => 'Рулон 4', 'purchase_price' => 1000,  'purchase_sum' => 567000, 'weight' => 4, 'balance' => 11.4, 'thickness' => 1, 'width' => 4, 'warehouse_id' => 3, 'manufacturer_id' => 2, 'owner_id' => 1],
            [ 'commodity_name' => 'Рулон 12', 'purchase_price' => 4000, 'purchase_sum' => 567000,  'weight' => 3, 'balance' => 5.4, 'thickness' => 1, 'width' => 4, 'warehouse_id' => 3, 'manufacturer_id' => 2, 'owner_id' => 1],
            [ 'commodity_name' => 'Рулон 23', 'purchase_price' => 3000, 'purchase_sum' => 567000,  'weight' => 3, 'balance' => 2.4, 'thickness' => 2, 'width' => 4, 'warehouse_id' => 3, 'manufacturer_id' => 2, 'owner_id' => 1],
            [ 'commodity_name' => 'Рулон 31', 'purchase_price' => 2000, 'purchase_sum' => 567000,  'weight' => 4, 'balance' => 4.4, 'thickness' => 2, 'width' => 3, 'warehouse_id' => 2, 'manufacturer_id' => 2, 'owner_id' => 1],
            [ 'commodity_name' => 'Рулон 43', 'purchase_price' => 1000,  'purchase_sum' => 567000, 'weight' => 4, 'balance' => 11.4, 'thickness' => 2, 'width' => 3, 'warehouse_id' => 2, 'manufacturer_id' => 2, 'owner_id' => 1],

        ];


        DB::table('commodities')->insert($data);
    }
}
