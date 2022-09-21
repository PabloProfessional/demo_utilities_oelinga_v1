<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccountsPayableRequest;
use App\Http\Requests\UpdateAccountsPayableRequest;
use App\Models\AccountsPayable;

class AccountsPayableController extends Controller
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
     * @param  \App\Http\Requests\StoreAccountsPayableRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAccountsPayableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AccountsPayable  $accountsPayable
     * @return \Illuminate\Http\Response
     */
    public function show(AccountsPayable $accountsPayable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AccountsPayable  $accountsPayable
     * @return \Illuminate\Http\Response
     */
    public function edit(AccountsPayable $accountsPayable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAccountsPayableRequest  $request
     * @param  \App\Models\AccountsPayable  $accountsPayable
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAccountsPayableRequest $request, AccountsPayable $accountsPayable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AccountsPayable  $accountsPayable
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccountsPayable $accountsPayable)
    {
        //
    }
}
