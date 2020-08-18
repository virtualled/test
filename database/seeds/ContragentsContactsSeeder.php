<?php

use Illuminate\Database\Seeder;

class ContragentsContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            ['phone' => '+7-999-99-99', 'mail' => '1@mail.ru', 'web' => 'www.steal.com', 'address' => 'Москва'],
            ['phone' => '+7-888-88-88', 'mail' => '2@mail.ru', 'web' => 'www.jf.com', 'address' => 'Тула'],
            ['phone' => '+7-777-77-77 ', 'mail' => '3@mail.ru', 'web' => 'www.obg.com', 'address' => 'Рязань'],
            ['phone' => '+7-666-66-66 ', 'mail' => '4@mail.ru', 'web' => 'www.ccc.com', 'address' => 'Омск']

        ];

        DB::table('contragents_contacts')->insert($data);
    }
}
