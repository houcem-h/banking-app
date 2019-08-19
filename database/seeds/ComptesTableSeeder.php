<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ComptesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i=0; $i < 100; $i++) {
            DB::table('comptes')->insert([                
                'rib' => $faker->numberBetween(10000000000,99999999999),
                'codeBanq' => $faker->numberBetween(10000,99999),
                'codeGuichet' => $faker->numberBetween(10000,99999),
                'cleRib' => $faker->numberBetween(10,99),
                'titulaire' => $faker->numberBetween(1,50),
                'solde' => $faker->randomfloat(3,10),
                'devise' => $faker->randomElement($array = array('TND','EUR','USD'))
            ]);
        }
    }
}
