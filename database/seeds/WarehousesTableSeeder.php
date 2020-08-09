<?php

use Illuminate\Database\Seeder;

class WarehousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ 'warehouse_name' => 'ОМТ готовая продукция'],
            [ 'warehouse_name' => 'ОМТ сырье'],
            [ 'warehouse_name' => 'КМ готовая продукция'],
            [ 'warehouse_name' => 'КМ сырье'],
            [ 'warehouse_name' => 'КМ заготовки'],


        ];


        DB::table('warehouses')->insert($data);
    }
}
