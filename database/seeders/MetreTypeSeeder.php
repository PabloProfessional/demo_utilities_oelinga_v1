<?php

namespace Database\Seeders;

use App\Models\MetreType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetreTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $metre_types = [
            'Electricity',
            'Water'
        ];

        foreach ($metre_types as $m) {
            MetreType::create([
                'name' => $m
            ]);
        }
    }
}
