<?php

namespace Database\Seeders;

use App\Models\Train;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 10; $i++){
            // creo un oggetto di Train
            $newTrain = new Train();
            // uso faker per dare dei valori ad ogni campo dell'oggetto
            $newTrain->azienda = $faker->name();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->dateTimeBetween('now','+2 week');
            $newTrain->orario_di_arrivo = $faker->dateTimeBetween('now','+2 week');
            $newTrain->codice_treno = $faker->regexify('[A-Za-z0-9]{20}');
            $newTrain->numero_carrozze = $faker->numberBetween(0, 20);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            // salvo
            $newTrain->save();
        }
    }
}
