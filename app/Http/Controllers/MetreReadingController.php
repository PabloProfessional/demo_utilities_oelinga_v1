<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMetreReadingRequest;
use App\Http\Requests\UpdateMetreReadingRequest;
use App\Models\MetreReading;

class MetreReadingController extends Controller
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
     * @param  \App\Http\Requests\StoreMetreReadingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMetreReadingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MetreReading  $metreReading
     * @return \Illuminate\Http\Response
     */
    public function show(MetreReading $metreReading)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MetreReading  $metreReading
     * @return \Illuminate\Http\Response
     */
    public function edit(MetreReading $metreReading)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMetreReadingRequest  $request
     * @param  \App\Models\MetreReading  $metreReading
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMetreReadingRequest $request, MetreReading $metreReading)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MetreReading  $metreReading
     * @return \Illuminate\Http\Response
     */
    public function destroy(MetreReading $metreReading)
    {
        //
    }
}
