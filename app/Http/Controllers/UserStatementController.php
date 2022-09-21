<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserStatementRequest;
use App\Http\Requests\UpdateUserStatementRequest;
use App\Models\UserStatement;

class UserStatementController extends Controller
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
     * @param  \App\Http\Requests\StoreUserStatementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserStatementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserStatement  $userStatement
     * @return \Illuminate\Http\Response
     */
    public function show(UserStatement $userStatement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserStatement  $userStatement
     * @return \Illuminate\Http\Response
     */
    public function edit(UserStatement $userStatement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserStatementRequest  $request
     * @param  \App\Models\UserStatement  $userStatement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserStatementRequest $request, UserStatement $userStatement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserStatement  $userStatement
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserStatement $userStatement)
    {
        //
    }
}
