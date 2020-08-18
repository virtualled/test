<?php

use Illuminate\Database\Seeder;

class CharacteristicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          ['characteristic_name' => 'Толщина', 'characteristic_value' => 0.55],
          ['characteristic_name' => 'Толщина', 'characteristic_value' => 0.7],
          ['characteristic_name' => 'Ширина', 'characteristic_value' => 1250],
          ['characteristic_name' => 'Ширина', 'characteristic_value' => 1000],
        ];

        DB::table('characteristics')->insert($data);
    }
}
