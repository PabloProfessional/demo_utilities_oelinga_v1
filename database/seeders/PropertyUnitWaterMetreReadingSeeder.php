<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PropertyUnitWaterMetreReading;
use Illuminate\Support\Str;

class PropertyUnitWaterMetreReadingSeeder extends Seeder
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
                'reading' => 150897,
                'created_at' => '2022-01-14'
            ],
            [
                'reading' => 161897,
                'created_at' => '2022-02-24'
            ],
            [
                'reading' => 170197,
                'created_at' => '2022-03-23'
            ],
            [
                'reading' => 184001,
                'created_at' => '2022-04-14'
            ],
            [
                'reading' => 186345,
                'created_at' => '2022-05-24'
            ],
            [
                'reading' => 190100,
                'created_at' => '2022-06-04'
            ],
            [
                'reading' => 200145,
                'created_at' => '2022-07-13'
            ],
            [
                'reading' => 200866,
                'created_at' => '2022-08-04'
            ],

        ];

        foreach ($metre_reading as $mr) {
            PropertyUnitWaterMetreReading::create([
                'metre_id' => 2,
                'reading' => $mr['reading'],
                'notes' => Str::random(100),
                'created_at' => $mr['created_at']
            ]);
        }
    }
}
