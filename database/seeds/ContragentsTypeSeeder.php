<?php

use Illuminate\Database\Seeder;

class ContragentsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['type_name' => 'Покупатель'],
            ['type_name' => 'Поставщик'],
            ['type_name' => 'Свои' ],

        ];

        DB::table('contragents_types')->insert($data);
    }
}
