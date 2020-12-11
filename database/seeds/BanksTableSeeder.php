<?php

use Illuminate\Database\Seeder;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();

        // А теперь давайте создадим 50 статей в нашей таблице
        $bankList = ['Halyk Bank', 'Altyn bank', 'BCC', 'Kaspi', 'ATF Bank', 'Eurasian Bank','ForteBank'];
        for ($i = 0; $i < 7; $i++) {
            \App\Bank::create([
                'bank_name' => $bankList[$i],
                'bank_rate' => 0,
            ]);
        }
    }
}
