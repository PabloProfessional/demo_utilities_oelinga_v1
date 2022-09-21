<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreElectricityMetreReadingRequest;
use App\Http\Requests\UpdateElectricityMetreReadingRequest;
use App\Models\ElectricityMetreReading;

class ElectricityMetreReadingController extends Controller
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
     * @param  \App\Http\Requests\StoreElectricityMetreReadingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreElectricityMetreReadingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ElectricityMetreReading  $electricityMetreReading
     * @return \Illuminate\Http\Response
     */
    public function show(ElectricityMetreReading $electricityMetreReading)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ElectricityMetreReading  $electricityMetreReading
     * @return \Illuminate\Http\Response
     */
    public function edit(ElectricityMetreReading $electricityMetreReading)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateElectricityMetreReadingRequest  $request
     * @param  \App\Models\ElectricityMetreReading  $electricityMetreReading
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateElectricityMetreReadingRequest $request, ElectricityMetreReading $electricityMetreReading)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ElectricityMetreReading  $electricityMetreReading
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElectricityMetreReading $electricityMetreReading)
    {
        //
    }
}
