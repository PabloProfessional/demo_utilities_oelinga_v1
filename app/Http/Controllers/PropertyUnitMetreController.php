<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropertyUnitMetreRequest;
use App\Http\Requests\UpdatePropertyUnitMetreRequest;
use App\Models\PropertyUnitMetre;
use App\Services\UtilityMeasurementFormat;

class PropertyUnitMetreController extends Controller
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
     * @param  \App\Http\Requests\StorePropertyUnitMetreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyUnitMetreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyUnitMetre  $propertyUnitMetre
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyUnitMetre $propertyUnitMetre)
    {
        //dd($propertyUnitMetre->bill);

        $electricity = $this->utility->getUnitElectricityTotal($propertyUnitMetre->property_unit);
        $water = $this->utility->getUnitWaterTotal($propertyUnitMetre->property_unit);

        $property = $propertyUnitMetre->property_unit->property;

        if($propertyUnitMetre->metre_type_id == 1) {
            $readings = $propertyUnitMetre->electricity;
            $image = '../../../../assets/img/metres/elect_sample.jpg';
            $color = '#c45d25';
        } elseif ($propertyUnitMetre->metre_type_id == 2) {
            $readings = $propertyUnitMetre->water;
            $image = '../../../../assets/img/metres/water_sample.jpg';
            $color = '#343c54';
        }

        //dd($readings->first());

        return view('property_unit_metre.show',compact('propertyUnitMetre','property','water','electricity','image','readings','color'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyUnitMetre  $propertyUnitMetre
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyUnitMetre $propertyUnitMetre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertyUnitMetreRequest  $request
     * @param  \App\Models\PropertyUnitMetre  $propertyUnitMetre
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyUnitMetreRequest $request, PropertyUnitMetre $propertyUnitMetre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyUnitMetre  $propertyUnitMetre
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyUnitMetre $propertyUnitMetre)
    {
        //
    }
}
