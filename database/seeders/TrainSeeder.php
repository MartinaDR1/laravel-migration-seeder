<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <10 ; $i++) { 
            $train = new Train();
            $train->company=$faker->randomElement(['Trenitalia', 'Italo']);
            $train->departure_station=$faker->city();
            $train->arrival_station=$faker->city();
            $train->departure_times=$faker->time();
            $train->arrival_times=$faker->time();
            $train->train_code=$faker->bothify('####');
            $train->number_coaches=$faker->numberBetween(4,9);
            $train->on_time=$faker->boolean();
            $train->cancelled=$faker->boolean();
            $train->save();
        }
    }
}
