<?php

use Illuminate\Database\Seeder;

class ContragentsRequisitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            ['company_address' => 'Москва', 'post_address' => 'Москва', 'inn' => '777777', 'kpp' => '777777', 'account' => '2343242', 'corr_acc' => '745754754','bank_name' => 'ВТБ'],
            ['company_address' => 'Тула', 'post_address' => 'Тула', 'inn' => '55555555', 'kpp' => '777777', 'account' => '234324324', 'corr_acc' => '45745754','bank_name' => 'Открытие'],
            ['company_address' => 'Рязань ', 'post_address' => 'Рязань', 'inn' => '66666', 'kpp' => '777777', 'account' => '23423423', 'corr_acc' => '457457457','bank_name' => 'Сбербанк'],
            ['company_address' => 'Омск ', 'post_address' => 'Омск', 'inn' => '3333333', 'kpp' => '777777', 'account' => '23423423', 'corr_acc' => '457457457','bank_name' => 'Альфа банк']

        ];

        DB::table('contragents_requisites')->insert($data);
    }
}
