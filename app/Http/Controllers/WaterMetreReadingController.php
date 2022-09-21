<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWaterMetreReadingRequest;
use App\Http\Requests\UpdateWaterMetreReadingRequest;
use App\Models\WaterMetreReading;

class WaterMetreReadingController extends Controller
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
     * @param  \App\Http\Requests\StoreWaterMetreReadingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWaterMetreReadingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WaterMetreReading  $waterMetreReading
     * @return \Illuminate\Http\Response
     */
    public function show(WaterMetreReading $waterMetreReading)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WaterMetreReading  $waterMetreReading
     * @return \Illuminate\Http\Response
     */
    public function edit(WaterMetreReading $waterMetreReading)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWaterMetreReadingRequest  $request
     * @param  \App\Models\WaterMetreReading  $waterMetreReading
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWaterMetreReadingRequest $request, WaterMetreReading $waterMetreReading)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WaterMetreReading  $waterMetreReading
     * @return \Illuminate\Http\Response
     */
    public function destroy(WaterMetreReading $waterMetreReading)
    {
        //
    }
}
