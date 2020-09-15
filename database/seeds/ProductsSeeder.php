<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['product_name' => 'Профнастил', 'category_id' => 1, 'sub_category_id' => 2],
            ['product_name' => 'Штрипс', 'category_id' => 2, 'sub_category_id' => 1],
            ['product_name' => 'Прямой лист', 'category_id' => 3, 'sub_category_id' => 2],

        ];

        DB::table('products')->insert($data);
    }
}
