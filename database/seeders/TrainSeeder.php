<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        // Inseriamo 10 treni
        for ($i = 0; $i < 10; $i++) {

            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->bothify('TR-####??');
            $newTrain->carriages_number = $faker->numberBetween(4, 12);
            $newTrain->on_time = $faker->boolean(80); // 80% chance of being on time
            $newTrain->cancelled = $faker->boolean(10); // 10% chance of being cancelled
            $newTrain->save();
        }
    }
}
