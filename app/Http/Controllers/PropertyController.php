<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use App\Models\Metre;
use App\Models\Property;
use Illuminate\Support\Carbon;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePropertyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //

        //$this->demand_capacity_calculator();

        //dd($property->property_group);

        $propertyGroup = $property->property_group;

        $total_energy = 0;
        $data = [];

        $electricity_metres = Metre::where('property_id',$property->id)
            ->where('metre_type_id',1)->get();

        $solar_metres = Metre::where('property_id',$property->id)
            ->where('metre_type_id',3)->get();

        $generator_metres = Metre::where('property_id',$property->id)
            ->where('metre_type_id',4)->get();



        foreach($electricity_metres as $em) {
            $total_energy += $em->electricity->sum('reading');
            array_push($data,[
                'name' => $em->name,
                'value' => $em->electricity->sum('reading')
            ]);
        }


        if(count($solar_metres) >= 1) {
            foreach($solar_metres as $sm){
                $total_energy += $sm->solar->sum('reading');
                array_push($data,[
                    'name' => $sm->name,
                    'value' => $sm->solar->sum('reading')
                ]);
            }
        }

        if(count($generator_metres) >= 1) {
            foreach($generator_metres as $gm){
                $total_energy += $gm->generator->sum('reading');
                array_push($data,[
                    'name' => $gm->name,
                    'value' => $gm->generator->sum('reading')
                ]);
            }
        }

        $total_water = 0;

        $water_metres = Metre::where('property_id',$property->id)
            ->where('metre_type_id',2)->get();

        foreach($water_metres as $wm) {
            $total_water += $wm->water->sum('reading');
            array_push($data,[
                'name' => $wm->name,
                'value' => $wm->water->sum('reading')
            ]);
        }

        $electricity = $this->electricityFormat($total_energy);

        $water = $this->waterFormat($total_water);

        //dd(json_encode($data));
        $breakdown_spend = json_encode($data);

        return view('property.show',compact('property','propertyGroup','electricity','water','breakdown_spend'));
    }


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

    public function demand_capacity_calculator() {

        $current_date = Carbon::now();

        $start_date = Carbon::parse('01-01-2022');

        $diff = $current_date->diffInHours($start_date);

        dd($diff);



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertyRequest  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyRequest $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
