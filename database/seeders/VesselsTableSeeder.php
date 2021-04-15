<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vessel;
use Illuminate\Support\Facades\DB;

class VesselsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {

        	DB::table('vessels')->insert([
	            'name' => $faker->name,
                'imo_number' => $faker->asciify('********************'),
        	]);
        }
    }
}
