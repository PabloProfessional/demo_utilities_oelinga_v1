<?php

namespace Database\Seeders;

use App\Models\PropertyUnit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        $units = [
            [
                'name' => 'Shop #524',
                'property_id' => 1,
            ],
            [
                'name' => 'Shop #27827',
                'property_id' => 1,
            ],
            [
                'name' => 'Shop #54',
                'property_id' => 1,
            ],
            [
                'name' => 'Shop #24',
                'property_id' => 1,
            ],
            [
                'name' => 'Shop #50024',
                'property_id' => 1,
            ],
            [
                'name' => 'Shop #98287',
                'property_id' => 1,
            ],
            [
                'name' => 'Office A',
                'property_id' => 2,
            ],
            [
                'name' => 'Office B',
                'property_id' => 2,
            ],
            [
                'name' => 'Office C',
                'property_id' => 2,
            ],
            [
                'name' => 'Canteen',
                'property_id' => 2,
            ],

        ];

        foreach($units as $unit){
            PropertyUnit::create([
                'name' => $unit['name'],
                'property_id' => $unit['property_id']
            ]);
        }

    }
}
