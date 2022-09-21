<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMetreRequest;
use App\Http\Requests\UpdateMetreRequest;
use App\Models\Metre;
use Illuminate\Support\Carbon;

class MetreController extends Controller
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
     * @param  \App\Http\Requests\StoreMetreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMetreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Metre  $metre
     * @return \Illuminate\Http\Response
     */
    public function show(Metre $metre)
    {

        $property = $metre->property;
        $propertyGroup = $property->property_group;
        $electricity = 0;
        $water = 0;
        $image = null;
        $color ='';
        $unit = '';
        $readings = null;
        $demand_capacity = null;

        if($metre->metre_type->id == 1) {
            $image = '../../../../assets/img/metres/elect_sample.jpg';
            $electricity = $this->electricityFormat($metre->electricity->sum('reading'));
            $color = '#c45d25';
            $unit = 'kWh';
            $readings = $metre->electricity;
            $demand_capacity = $this->demand_capacity($metre->electricity->sum('reading'),$metre->electricity->last()->created_at);
        } elseif ($metre->metre_type->id == 2) {
            $image = '../../../../assets/img/metres/water_sample.jpg';
            $water = $this->waterFormat($metre->water->sum('reading'));
            $color = '#343c54';
            $unit = 'litres';
            $readings = $metre->water;
            $demand_capacity = $water;
        } elseif ($metre->metre_type->id == 3) {
            $image = '../../../../assets/img/metres/'.$metre->picture;
            $electricity = $this->electricityFormat($metre->solar->sum('reading'));
            $color = '#c45d25';
            $unit = 'kWh';
            $readings = $metre->solar;
            $demand_capacity = $this->demand_capacity($metre->solar->sum('reading'),$metre->solar->last()->created_at);
        }elseif ($metre->metre_type->id == 4) {
            $image = '../../../../assets/img/metres/'.$metre->picture;
            $electricity = $this->electricityFormat($metre->generator->sum('reading'));
            $color = '#c45d25';
            $unit = 'kWh';
            $readings = $metre->generator;
            $demand_capacity = $this->demand_capacity($metre->generator->sum('reading'),$metre->generator->last()->created_at);
        } else {
            $image = null;
        }

        //dd($readings);

        return view('metre.show',compact(
            'metre',
            'property',
            'propertyGroup',
            'electricity',
            'water',
            'image',
            'color',
            'unit',
            'readings',
            'demand_capacity'
            )
        );

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

    public function demand_capacity($used_units,$current_date) {

        $start_date = Carbon::parse('01-01-2022');

        $diff = $current_date->diffInHours($start_date);

        $demand_capacity = $used_units / $diff;

        return $demand_capacity;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Metre  $metre
     * @return \Illuminate\Http\Response
     */
    public function edit(Metre $metre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMetreRequest  $request
     * @param  \App\Models\Metre  $metre
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMetreRequest $request, Metre $metre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Metre  $metre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Metre $metre)
    {
        //
    }
}
