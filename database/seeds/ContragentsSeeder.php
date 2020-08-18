<?php

use Illuminate\Database\Seeder;

class ContragentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            ['contragent_name' => 'Оптимальные металлотехнологии', 'contragent_type_id' => 3, 'contragent_contacts_id' => 1, 'contragent_requisite_id' => 1],
            ['contragent_name' => 'Стальинтекс', 'contragent_type_id' => 2, 'contragent_contacts_id' => 1, 'contragent_requisite_id' => 1],
            ['contragent_name' => 'Железный форт', 'contragent_type_id' => 1, 'contragent_contacts_id' => 1, 'contragent_requisite_id' => 1],
            ['contragent_name' => 'Гальва профиль', 'contragent_type_id' => 1, 'contragent_contacts_id' => 1, 'contragent_requisite_id' => 1]

         ];

        DB::table('contragents')->insert($data);
    }
}
