<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(WarehousesTableSeeder::class); //Склады
         $this->call(CommodityTableSeeder::class); //Сырье
    }
}
