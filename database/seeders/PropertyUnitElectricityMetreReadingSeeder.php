<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PropertyUnitElectricityMetreReading;
use Illuminate\Support\Str;

class PropertyUnitElectricityMetreReadingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $metre_reading = [
            [
                'reading' => 15999,
                'created_at' => '2022-01-31'
            ],
            [
                'reading' => 16999,
                'created_at' => '2022-02-28'
            ],
            [
                'reading' => 17497,
                'created_at' => '2022-03-31'
            ],
            [
                'reading' => 18111,
                'created_at' => '2022-04-30'
            ],
            [
                'reading' => 18289,
                'created_at' => '2022-05-31'
            ],
            [
                'reading' => 19206,
                'created_at' => '2022-06-30'
            ],
            [
                'reading' => 20345,
                'created_at' => '2022-07-31'
            ],
            [
                'reading' => 21906,
                'created_at' => '2022-08-31'
            ],

        ];

        foreach ($metre_reading as $mr) {
            PropertyUnitElectricityMetreReading::create([
                'metre_id' =>  1,
                'reading' => $mr['reading'],
                'notes' => Str::random(100),
                'created_at' => $mr['created_at']
            ]);
        }
    }
}
