<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i =0 ;$i<100 ; $i++) {
            DB::table('products')->insert(
                [
                    'name' => $faker->word(),
                    'prix' => $faker->randomFloat('2', '100', '999'),
                    'description'=>$faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                    'created_at' => $faker->dateTimeBetween('+1 week', '+1 month')

                ]);
        }
    }

}
