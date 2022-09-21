<?php

namespace Database\Seeders;

use App\Models\Metre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetreSeeder extends Seeder
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
                'user_id' => 1,
                'property_id' => 4,
                'metre_type_id' => 1,
                'metre_brand_id' => 1,
            ],
            [
                'name' => 'Electricity Metre',
                'user_id' => 1,
                'property_id' => 5,
                'metre_type_id' => 1,
                'metre_brand_id' => 1,
            ],
            [
                'name' => 'Water Metre',
                'user_id' => 1,
                'property_id' => 4,
                'metre_type_id' => 2,
                'metre_brand_id' => 2,
            ],
            [
                'name' => 'Water Metre',
                'user_id' => 1,
                'property_id' => 5,
                'metre_type_id' => 2,
                'metre_brand_id' => 2,
            ],
            [
                'name' => 'Electricity Metre',
                'user_id' => 2,
                'property_id' => 1,
                'metre_type_id' => 1,
                'metre_brand_id' => 1,
            ],
            [
                'name' => 'Electricity Metre',
                'user_id' => 2,
                'property_id' => 2,
                'metre_type_id' => 1,
                'metre_brand_id' => 1,
            ],
            [
                'name' => 'Electricity Metre',
                'user_id' => 2,
                'property_id' => 3,
                'metre_type_id' => 1,
                'metre_brand_id' => 1,
            ],
            [
                'name' => 'Water Metre',
                'user_id' => 2,
                'property_id' => 1,
                'metre_type_id' => 2,
                'metre_brand_id' => 2,
            ],
            [
                'name' => 'Water Metre',
                'user_id' => 2,
                'property_id' => 2,
                'metre_type_id' => 2,
                'metre_brand_id' => 2,
            ],
            [
                'name' => 'Water Metre',
                'user_id' => 2,
                'property_id' => 3,
                'metre_type_id' => 2,
                'metre_brand_id' => 2,
            ],

        ];

        foreach ($metres as $m) {
            Metre::create([
                'name' => $m['name'],
                'user_id' => $m['user_id'],
                'property_id' => $m['property_id'],
                'metre_type_id' => $m['metre_type_id'],
                'metre_brand_id' => $m['metre_brand_id'],
            ]);
        }
    }
}
