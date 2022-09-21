<?php

namespace Database\Seeders;

use App\Models\PropertyUnitTenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyUnitTenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $tenants = [
            [
                'property_unit_id' => 7,
                'user_id' => 4,
                'property_unit_lease_id' => 1,
            ],
            [
                'property_unit_id' => 8,
                'user_id' => 5,
                'property_unit_lease_id' => 2,
            ],
            [
                'property_unit_id' => 9,
                'user_id' => 6,
                'property_unit_lease_id' => 1,
            ],
            [
                'property_unit_id' => 10,
                'user_id' => 4,
                'property_unit_lease_id' => 1,
            ],
            [
                'property_unit_id' => 2,
                'user_id' => 7,
                'property_unit_lease_id' => 2,
            ],
            [
                'property_unit_id' => 6,
                'user_id' => 4,
                'property_unit_lease_id' => 1,
            ]
        ];

        foreach ($tenants as $tenant) {
            PropertyUnitTenant::create([
                'property_unit_id' => $tenant['property_unit_id'],
                'user_id' => $tenant['user_id'],
                'property_unit_lease_id' => $tenant['property_unit_lease_id'],
            ]);
        }
    }
}
