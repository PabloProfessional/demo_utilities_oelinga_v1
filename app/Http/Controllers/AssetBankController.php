<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAssetBankRequest;
use App\Http\Requests\UpdateAssetBankRequest;
use App\Models\AssetBank;

class AssetBankController extends Controller
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
     * @param  \App\Http\Requests\StoreAssetBankRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssetBankRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssetBank  $assetBank
     * @return \Illuminate\Http\Response
     */
    public function show(AssetBank $assetBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssetBank  $assetBank
     * @return \Illuminate\Http\Response
     */
    public function edit(AssetBank $assetBank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssetBankRequest  $request
     * @param  \App\Models\AssetBank  $assetBank
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssetBankRequest $request, AssetBank $assetBank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssetBank  $assetBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssetBank $assetBank)
    {
        //
    }
}
