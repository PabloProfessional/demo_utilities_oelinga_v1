<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropertyUnitRequest;
use App\Http\Requests\UpdatePropertyUnitRequest;
use App\Models\PropertyUnit;
use App\Services\UtilityMeasurementFormat;

class PropertyUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $utility;

    public function __construct(UtilityMeasurementFormat $UtilityMeasurementFormat) {

        $this->utility = $UtilityMeasurementFormat;

    }


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
     * @param  \App\Http\Requests\StorePropertyUnitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyUnitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyUnit  $propertyUnit
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyUnit $propertyUnit)
    {


        $electricity = $this->utility->getUnitElectricityTotal($propertyUnit);
        $water = $this->utility->getUnitWaterTotal($propertyUnit);
        $utility_total = $electricity['electricity_cost'] + $water['water_cost'];

        return view('property_unit.show',compact('propertyUnit','electricity','water','utility_total'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyUnit  $propertyUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyUnit $propertyUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertyUnitRequest  $request
     * @param  \App\Models\PropertyUnit  $propertyUnit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyUnitRequest $request, PropertyUnit $propertyUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyUnit  $propertyUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyUnit $propertyUnit)
    {
        //
    }
}
