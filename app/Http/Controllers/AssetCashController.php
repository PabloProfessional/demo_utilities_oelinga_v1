<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAssetCashRequest;
use App\Http\Requests\UpdateAssetCashRequest;
use App\Models\AssetCash;

class AssetCashController extends Controller
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
     * @param  \App\Http\Requests\StoreAssetCashRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssetCashRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssetCash  $assetCash
     * @return \Illuminate\Http\Response
     */
    public function show(AssetCash $assetCash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssetCash  $assetCash
     * @return \Illuminate\Http\Response
     */
    public function edit(AssetCash $assetCash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssetCashRequest  $request
     * @param  \App\Models\AssetCash  $assetCash
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssetCashRequest $request, AssetCash $assetCash)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssetCash  $assetCash
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssetCash $assetCash)
    {
        //
    }
}
