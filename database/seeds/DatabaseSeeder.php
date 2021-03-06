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
         $this->call(CharacteristicsSeeder::class); //Характеристики
         $this->call(ContragentsSeeder::class); //Контрагенты
         $this->call(ContragentsContactsSeeder::class); //Контраген Контакты
         $this->call(ContragentsRequisitesSeeder::class); //Контраген Реквизиты
         $this->call(ContragentsTypeSeeder::class); //Контраген Типы
         $this->call(OrdersSeeder::class); //Заказы
         $this->call(OrdersStatusesSeeder::class); //Заказы Статусы
         $this->call(OrdersUnitsSeeder::class); //Заказы Единицы
        $this->call(OrdersProductsSeeder::class); //Заказы Продукт
        $this->call(OrdersProductsDetailsSeeder::class); //Заказы Продукт Детали
        $this->call(ProductsSeeder::class); //Заказы Продукт Детали
    }
}
