<?php

namespace Database\Seeders;

use App\Models\PropertyUnitBill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyUnitBillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $bills = [
            [
                'name' => 'Electricity Bill for January 2022'
            ],
            [
                'name' => 'Electricity Bill for February 2022'
            ],
            [
                'name' => 'Electricity Bill for March 2022'
            ],
            [
                'name' => 'Electricity Bill for April 2022'
            ],
            [
                'name' => 'Electricity Bill for May 2022'
            ],
            [
                'name' => 'Electricity Bill for June 2022'
            ],
            [
                'name' => 'Electricity Bill for July 2022'
            ],
            [
                'name' => 'Electricity Bill for August 2022'
            ],
        ];

        foreach ($bills as $bill) {
            PropertyUnitBill::create([
                'name' => $bill['name'],
                'property_unit_id' => 7,
                'property_unit_metre_id' => 1,
                'user_id' => 4,
                'notes' => 'Notes from billing.'
            ]);
        }
    }
}
