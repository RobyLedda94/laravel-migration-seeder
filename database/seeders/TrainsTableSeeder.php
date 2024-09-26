<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// importo il faker generator
use Faker\Generator as Faker; 
// utilizzo il modello train
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<20; $i++){
            $train = new Train();
            // popolo la tabella con dati faker
            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->randomNumber(5, true);
            $train->carriage_number = $faker->numberBetween(2, 12);
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();

            // salvo i dati nei record
            $train->save();
        }
    }
}
