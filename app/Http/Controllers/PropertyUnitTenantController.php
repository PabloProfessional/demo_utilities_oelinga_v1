<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropertyUnitTenantRequest;
use App\Http\Requests\UpdatePropertyUnitTenantRequest;
use App\Models\PropertyUnitTenant;

class PropertyUnitTenantController extends Controller
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
     * @param  \App\Http\Requests\StorePropertyUnitTenantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyUnitTenantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyUnitTenant  $propertyUnitTenant
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyUnitTenant $propertyUnitTenant)
    {

        $tenant = $propertyUnitTenant;

        dd($tenant);

        return view('property_unit_tenant.show',compact('tenant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyUnitTenant  $propertyUnitTenant
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyUnitTenant $propertyUnitTenant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertyUnitTenantRequest  $request
     * @param  \App\Models\PropertyUnitTenant  $propertyUnitTenant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyUnitTenantRequest $request, PropertyUnitTenant $propertyUnitTenant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyUnitTenant  $propertyUnitTenant
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyUnitTenant $propertyUnitTenant)
    {
        //
    }
}
