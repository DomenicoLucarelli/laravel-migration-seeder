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
        $trainFile = fopen(__DIR__ . '/../trains.csv', 'r' );

        $trainsCSV = fgetcsv($trainFile);
        $trainsCSV = fgetcsv($trainFile);


        while( $trainsCSV != false){
            $newTrain = new Train();
           
            $newTrain->azienda = $trainsCSV[0] ;
            $newTrain->stazione_di_partenza = $trainsCSV[1] ;
            $newTrain->stazione_di_arrivo = $trainsCSV[2] ;
            $newTrain->orario_di_partenza = $trainsCSV[3] ;
            $newTrain->orario_di_arrivo = $trainsCSV[4] ;
            $newTrain->codice_treno = $trainsCSV[5] ;
            $newTrain->numero_carrozze = $trainsCSV[6] ;
            $newTrain->in_orario = $trainsCSV[7] ;
            $newTrain->cancellato = $trainsCSV[8] ;
            
            $newTrain->save();

            $trainsCSV = fgetcsv($trainFile);

        }

        // for($i=0; $i < 10; $i++){
        //     // creo un oggetto di Train
        //     $newTrain = new Train();
        //     // uso faker per dare dei valori ad ogni campo dell'oggetto
        //     $newTrain->azienda = $faker->word();
        //     $newTrain->stazione_di_partenza = $faker->city();
        //     $newTrain->stazione_di_arrivo = $faker->city();
        //     $newTrain->orario_di_partenza = $faker->dateTimeBetween('now','+2 week');
        //     $newTrain->orario_di_arrivo = $faker->dateTimeBetween('now','+2 week');
        //     $newTrain->codice_treno = $faker->regexify('[A-Za-z0-9]{20}');
        //     $newTrain->numero_carrozze = $faker->numberBetween(0, 20);
        //     $newTrain->in_orario = $faker->boolean();
        //     $newTrain->cancellato = $faker->boolean();
        //     // salvo
        //     $newTrain->save();
        // }
    }
}
