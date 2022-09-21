<?php
/**
 * Created by PhpStorm.
 * User: muigai
 * Date: 10/08/22
 * Time: 15:07
 */

namespace App\Services;


use App\Models\PropertyUnitMetre;

class UtilityMeasurementFormat {

    public function electricityFormat($num) {

        if($num>1000) {

            $x = round($num);
            $x_number_format = number_format($x);
            $x_array = explode(',', $x_number_format);
            $x_parts = array(' kWh', ' GWh', ' TWh', ' PWh');
            $x_count_parts = count($x_array) - 1;
            $x_display = $x;
            $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
            $x_display .= $x_parts[$x_count_parts - 1];

            return $x_display;

        }

        return $num;
    }

    public function waterFormat($num) {

        if($num>1000) {

            $x = round($num);
            $x_number_format = number_format($x);
            $x_array = explode(',', $x_number_format);
            $x_parts = array(' k', ' mill', ' bill', ' trill');
            $x_count_parts = count($x_array) - 1;
            $x_display = $x;
            $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
            $x_display .= $x_parts[$x_count_parts - 1];

            return $x_display;

        }

        return $num;
    }

    public function getUnitElectricityTotal($unit) {

        $e_metres = PropertyUnitMetre::where('property_unit_id',$unit->id)
            ->where('metre_type_id',1)
            ->first(); // Because it's one unit one metre.

        //dd($e_metres->electricity);

        if(!empty($e_metres->electricity)) {
            $data = [
                'electricity' => $this->electricityFormat($e_metres->electricity->sum('reading')),
                'electricity_cost' => $e_metres->electricity->sum('reading')*1.209
            ];
        } else {
            $data = [
                'electricity' => 0,
                'electricity_cost' => 0
            ];
        }


        return $data;
    }

    public function getUnitWaterTotal($unit) {

        $w_metres = PropertyUnitMetre::where('property_unit_id',$unit->id)
            ->where('metre_type_id',2)
            ->first();
        if(!empty($w_metres->water)) {
            $data = [
                'water' => $this->waterFormat($w_metres->water->sum('reading')),
                'water_cost' => $w_metres->water->sum('reading')*0.04
            ];
        } else {
            $data = [
                'water' => 0,
                'water_cost' => 0
            ];
        }

        return $data;
    }

}