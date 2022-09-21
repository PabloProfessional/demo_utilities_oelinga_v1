<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\UtilityMeasurementFormat;

class UserController extends Controller
{
    //

    protected $utility;

    public function __construct(UtilityMeasurementFormat $UtilityMeasurementFormat) {

        $this->utility = $UtilityMeasurementFormat;

    }

    public function show($id) {

        $user = User::find($id);
        $units = [];
        $total_bill = 0;
        $total_electricity = 0;
        $total_water = 0;
        foreach($user->units as $unit) {
            //dd($unit->unit->id);
            $electricity = $this->utility->getUnitElectricityTotal($unit->unit);
            $water = $this->utility->getUnitWaterTotal($unit->unit);
            $total = $electricity['electricity_cost'] + $water['water_cost'];
            array_push($units,[
                'id' => $unit->unit->id,
                'name' => $unit->unit->name,
                'electricity_cost' => $electricity['electricity_cost'],
                'electricity_units' => $electricity['electricity'],
                'water_cost' => $water['water_cost'],
                'water_units' => $water['water'],
                'total' => $total,
            ]);
            $total_bill += $total;
            $total_electricity += $electricity['electricity_cost'] / 1.209;
            $total_water += $water['water_cost'] / 0.04;
        }

        $electricity = $this->utility->electricityFormat($total_electricity);
        $water = $this->utility->waterFormat($total_water);
        $water_graph = $total_water * 0.04;
        $electricity_graph = $total_electricity * 1.209;

       return view('user.show',compact(
           'user','units','total_bill','electricity','water',
           'water_graph',
           'electricity_graph'
       ));

    }
}
