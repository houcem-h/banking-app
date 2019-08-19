<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i=0; $i < 50; $i++) {
            DB::table('clients')->insert([
                // 'nom' => str_random(10),
                // 'prenom' => str_random(10),
                // 'dateNaissance'=> mt_rand(1950,2010).'-'.mt_rand(01,12).'-'.mt_rand(1,31),
                // // 'dateNaissance'=> Carbon::create(mt_rand(1950,2010),mt_rand(01,12),mt_rand(1,31)),
                // 'adresse' => str_random(35),
                // 'tel' => mt_rand(11111111,99999999),
                'nom' => $faker->lastName,
                'prenom' => $faker->firstName,
                'dateNaissance'=> $faker->date,
                'adresse' => $faker->address,
                'tel' => $faker->randomNumber(8),
            ]);
          }
    }
}
