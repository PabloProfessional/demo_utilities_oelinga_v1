<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropertyUnitBillRequest;
use App\Http\Requests\UpdatePropertyUnitBillRequest;
use App\Models\PropertyUnitBill;

class PropertyUnitBillController extends Controller
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
     * @param  \App\Http\Requests\StorePropertyUnitBillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyUnitBillRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyUnitBill  $propertyUnitBill
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyUnitBill $propertyUnitBill)
    {
        //dd($propertyUnitBill->item);

        $bill = $propertyUnitBill;

        return view('property_unit_bill.show',compact('bill'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyUnitBill  $propertyUnitBill
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyUnitBill $propertyUnitBill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertyUnitBillRequest  $request
     * @param  \App\Models\PropertyUnitBill  $propertyUnitBill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyUnitBillRequest $request, PropertyUnitBill $propertyUnitBill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyUnitBill  $propertyUnitBill
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyUnitBill $propertyUnitBill)
    {
        //
    }
}
