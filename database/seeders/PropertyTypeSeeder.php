<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PropertyType;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $property_types = [
            'Retail',
            'Warehousing',
            'Health facility',
            'Office block',
            'Residential',
            'Sports facility',
            'Storage facility',
            'Manufacturing',
            'Food processing',
        ];

        foreach ($property_types as $prop) {
            PropertyType::create([
               'name' => $prop
            ]);
        }




    }
}
