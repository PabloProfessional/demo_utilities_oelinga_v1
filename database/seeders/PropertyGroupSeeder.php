<?php

namespace Database\Seeders;

use App\Models\PropertyGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $property_groups = [
            '2' => 'The Persona Group',
            '1' => 'Pablo Inc'
        ];

        foreach ($property_groups as $key => $value) {
            PropertyGroup::create([
                'name' => $value,
                'user_id' =>$key
            ]);
        }
    }
}
