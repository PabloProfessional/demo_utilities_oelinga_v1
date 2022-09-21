<?php

namespace Database\Seeders;

use App\Models\PropertyUnitMetre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyUnitMetreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $metres = [
            [
                'name' => 'Electricity Metre',
                'user_id' => 4,
                'property_unit_id' => 7,
                'metre_type_id' => 1,
                'metre_brand_id' => 1,
            ],
            [
                'name' => 'Water Metre',
                'user_id' => 4,
                'property_unit_id' => 7,
                'metre_type_id' => 2,
                'metre_brand_id' => 2,
            ],
            [
                'name' => 'Water Metre',
                'user_id' => 5,
                'property_unit_id' => 8,
                'metre_type_id' => 2,
                'metre_brand_id' => 2,
            ],
            [
                'name' => 'Electricity Metre',
                'user_id' => 5,
                'property_unit_id' => 8,
                'metre_type_id' => 1,
                'metre_brand_id' => 1,
            ],
            [
                'name' => 'Electricity Metre',
                'user_id' => 6,
                'property_unit_id' => 9,
                'metre_type_id' => 1,
                'metre_brand_id' => 1,
            ],
            [
                'name' => 'Water Metre',
                'user_id' => 6,
                'property_unit_id' => 9,
                'metre_type_id' => 2,
                'metre_brand_id' => 2,
            ],
            [
                'name' => 'Electricity Metre',
                'user_id' => 4,
                'property_unit_id' => 10,
                'metre_type_id' => 1,
                'metre_brand_id' => 1,
            ],
            [
                'name' => 'Water Metre',
                'user_id' => 4,
                'property_unit_id' => 10,
                'metre_type_id' => 2,
                'metre_brand_id' => 2,
            ],

        ];

        foreach ($metres as $metre) {
            PropertyUnitMetre::create([
                'name' => $metre['name'],
                'property_unit_id' => $metre['property_unit_id'],
                'metre_type_id' => $metre['metre_type_id'],
                'metre_brand_id' => $metre['metre_brand_id'],
            ]);
        }
    }
}
