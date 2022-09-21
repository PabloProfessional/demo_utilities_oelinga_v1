<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        /*$properties = [
            [
                'name' => 'Randburg Super Mall',
                'user_id' => 2,
                'property_group_id' => 1,
                'property_type_id' => 1,
                'description' => 'Mall that provides a great shopping experience to customers',
                'gps_coordinates' => '-26.0955296,27.9483853',
                'address' => 'Pretoria Ave, Ferndale, Johannesburg, 2194, South Africa.',
            ],
            [
                'name' => 'Oaklands Office Park',
                'user_id' => 2,
                'property_group_id' => 1,
                'property_type_id' => 4,
                'description' => 'Professional managed office spaces.',
                'gps_coordinates' => '-26.0955212,27.9483853',
                'address' => 'Building E, Ballyoaks Office Park, 35 Ballyclare Dr, Johannesburg, 2021, South Africa',
            ],
            [
                'name' => 'H-Point Hospital',
                'user_id' => 2,
                'property_group_id' => 1,
                'property_type_id' => 3,
                'description' => 'Get the best health care here.',
                'gps_coordinates' => '-26.0954493,27.8433184',
                'address' => 'Cedar Ave West &, Cedar Rd, Fourways, Johannesburg, 2055, South Africa',
            ],
            [
                'name' => 'Chrome Heavy Industries',
                'user_id' => 1,
                'property_group_id' => 2,
                'property_type_id' => 8,
                'description' => 'Manufacturing facility for machinery.',
                'gps_coordinates' => '-26.0254391,27.5897689',
                'address' => '125 R114 Cnr, Beyers Naude Dr, Krugersdorp, 1747, South Africa',
            ],
            [
                'name' => 'Salads Galore',
                'user_id' => 1,
                'property_group_id' => 2,
                'property_type_id' => 9,
                'description' => 'Food processing and packaging plant',
                'gps_coordinates' => '-26.095314,27.8433178',
                'address' => '194 Olympic Duel Avenue Northlands Business Park, Northriding, Johannesburg, 2162, South Africa',
            ],
        ];

        */

        $properties = [
            [
                'name' => 'Oaklands Office Park',
                'user_id' => 2,
                'property_group_id' => 1,
                'property_type_id' => 4,
                'description' => 'Professional managed office spaces.',
                'gps_coordinates' => '-26.0955212,27.9483853',
                'address' => 'Building E, Ballyoaks Office Park, 35 Ballyclare Dr, Johannesburg, 2021, South Africa',
            ],
        ];

        foreach ($properties as $property) {
            Property::create([
                'name' => $property['name'],
                'user_id' => $property['user_id'],
                'property_group_id' => $property['property_group_id'],
                'property_type_id' => $property['property_type_id'],
                'description' => $property['description'],
                'gps_coordinates' => $property['gps_coordinates'],
                'address' => $property['address'],
            ]);
        }
    }
}
