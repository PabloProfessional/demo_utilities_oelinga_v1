<?php

namespace Database\Seeders;

use App\Models\PropertyUnitBill;
use App\Models\PropertyUnitBillItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyUnitBillItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $previous_month = 20345;
        $current_month = 21906;
        $units_consumed = $current_month - $previous_month;
        $metre_type_id = 1;
        $property_bill_id = 16;
        $name = 'Electricity consumed in Kwh';
        $amount = $units_consumed * 1.209;

        PropertyUnitBillItem::create([
            'name' => $name,
            'amount' => $amount,
            'property_bill_id' => $property_bill_id,
            'metre_type_id' => $metre_type_id,
            'units_consumed' => $units_consumed
        ]);



    }
}
