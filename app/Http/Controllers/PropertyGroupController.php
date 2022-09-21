<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropertyGroupRequest;
use App\Http\Requests\UpdatePropertyGroupRequest;
use App\Models\PropertyGroup;
use Illuminate\Support\Facades\Auth;

class PropertyGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        if (isset(Auth::user()->property_group->first()->id)) {
            return redirect('property_group/'.Auth::user()->property_group->first()->id);
        } else {
            return view('dashboard');
        }
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
     * @param  \App\Http\Requests\StorePropertyGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyGroup  $propertyGroup
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyGroup $propertyGroup)
    {
        //

        return view('property_group.dashboard',compact('propertyGroup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyGroup  $propertyGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyGroup $propertyGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertyGroupRequest  $request
     * @param  \App\Models\PropertyGroup  $propertyGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyGroupRequest $request, PropertyGroup $propertyGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyGroup  $propertyGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyGroup $propertyGroup)
    {
        //
    }
}
