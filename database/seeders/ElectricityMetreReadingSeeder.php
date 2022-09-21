<?php

namespace Database\Seeders;

use App\Models\ElectricityMetreReading;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ElectricityMetreReadingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*

        $count = 1;
        $metre_ids = array('a'=>1,'b'=>1,'c'=>5,'d'=>6,'e'=>7 );
        $n = 1;

        while ($count <= 100) {
            ElectricityMetreReading::create([
                'metre_id' =>  array_rand(array_flip($metre_ids), $n),
                'reading' => rand(1,1000000),
                'measurement_unit' => 'Wh',
                'notes' => Str::random(100)
            ]);
            $count++;
        }

        */


        $metre_reading = [
            [
                'metre_id' => 6,
                'reading' => 102877,
                'measurement_unit' => 'Wh',
                'notes' => Str::random(100),
                'created_at' => '2022-01-13'
            ],
            [
                'metre_id' => 6,
                'reading' => 102977,
                'measurement_unit' => 'Wh',
                'notes' => Str::random(100),
                'created_at' => '2022-02-10'
            ],
            [
                'metre_id' => 6,
                'reading' => 103877,
                'measurement_unit' => 'Wh',
                'notes' => Str::random(100),
                'created_at' => '2022-03-23'
            ],
            [
                'metre_id' => 6,
                'reading' => 112877,
                'measurement_unit' => 'Wh',
                'notes' => Str::random(100),
                'created_at' => '2022-04-13'
            ],
            [
                'metre_id' => 6,
                'reading' => 113877,
                'measurement_unit' => 'Wh',
                'notes' => Str::random(100),
                'created_at' => '2022-05-28'
            ],
            [
                'metre_id' => 6,
                'reading' => 113900,
                'measurement_unit' => 'Wh',
                'notes' => Str::random(100),
                'created_at' => '2022-06-13'
            ],
            [
                'metre_id' => 6,
                'reading' => 115877,
                'measurement_unit' => 'Wh',
                'notes' => Str::random(100),
                'created_at' => '2022-07-03'
            ],
            [
                'metre_id' => 6,
                'reading' => 122877,
                'measurement_unit' => 'Wh',
                'notes' => Str::random(100),
                'created_at' => '2022-08-03'
            ],
        ];

        foreach ($metre_reading as $mr) {
            ElectricityMetreReading::create([
                'metre_id' =>  $mr['metre_id'],
                'reading' => $mr['reading'],
                'measurement_unit' => $mr['measurement_unit'],
                'notes' => $mr['notes'],
                'created_at' => $mr['created_at']
            ]);
        }
    }
}
