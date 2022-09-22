<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMQTThttpRequest;
use App\Http\Requests\UpdateMQTThttpRequest;
use App\Models\MQTThttp;
use Illuminate\Support\Facades\Http;

class MQTThttpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $response = Http::get('http://example.com/users/1','test');

        dd($response->body());


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
     * @param  \App\Http\Requests\StoreMQTThttpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMQTThttpRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MQTThttp  $mQTThttp
     * @return \Illuminate\Http\Response
     */
    public function show(MQTThttp $mQTThttp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MQTThttp  $mQTThttp
     * @return \Illuminate\Http\Response
     */
    public function edit(MQTThttp $mQTThttp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMQTThttpRequest  $request
     * @param  \App\Models\MQTThttp  $mQTThttp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMQTThttpRequest $request, MQTThttp $mQTThttp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MQTThttp  $mQTThttp
     * @return \Illuminate\Http\Response
     */
    public function destroy(MQTThttp $mQTThttp)
    {
        //
    }
}
