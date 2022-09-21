<?php

namespace Database\Seeders;

use App\Models\WaterMetreReading;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\WaterMetreReadingFactory;
use Illuminate\Support\Str;

class WaterMetreReadingSeeder extends Seeder
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
        $metre_ids = array('a'=>3,'b'=>4,'c'=>8,'d'=>9,'e'=>10 );
        $n = 1;

        while ($count <= 100) {
            WaterMetreReading::create([
                'metre_id' =>  array_rand(array_flip($metre_ids), $n),
                'reading' => rand(1,1000000),
                'notes' => Str::random(100)
            ]);
            $count++;
        }

        */

        $metre_reading = [
            [
                'metre_id' => 9,
                'reading' => 102889,
                'measurement_unit' => 'Wh',
                'notes' => Str::random(100),
                'created_at' => '2022-01-13'
            ],
            [
                'metre_id' => 9,
                'reading' => 102935,
                'measurement_unit' => 'Wh',
                'notes' => Str::random(100),
                'created_at' => '2022-02-10'
            ],
            [
                'metre_id' => 6,
                'reading' => 103867,
                'measurement_unit' => 'Wh',
                'notes' => Str::random(100),
                'created_at' => '2022-03-23'
            ],
            [
                'metre_id' => 6,
                'reading' => 112918,
                'measurement_unit' => 'Wh',
                'notes' => Str::random(100),
                'created_at' => '2022-04-13'
            ],
            [
                'metre_id' => 6,
                'reading' => 113876,
                'measurement_unit' => 'Wh',
                'notes' => Str::random(100),
                'created_at' => '2022-05-28'
            ],
            [
                'metre_id' => 6,
                'reading' => 113904,
                'measurement_unit' => 'Wh',
                'notes' => Str::random(100),
                'created_at' => '2022-06-13'
            ],
            [
                'metre_id' => 6,
                'reading' => 115870,
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
            WaterMetreReading::create([
                'metre_id' =>  9,
                'reading' => $mr['reading'],
                'notes' => Str::random(100),
                'created_at' => $mr['created_at']
            ]);
        }
    }
}
