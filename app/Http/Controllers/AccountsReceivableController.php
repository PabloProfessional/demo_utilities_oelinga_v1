<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccountsReceivableRequest;
use App\Http\Requests\UpdateAccountsReceivableRequest;
use App\Models\AccountsReceivable;

class AccountsReceivableController extends Controller
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
     * @param  \App\Http\Requests\StoreAccountsReceivableRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAccountsReceivableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AccountsReceivable  $accountsReceivable
     * @return \Illuminate\Http\Response
     */
    public function show(AccountsReceivable $accountsReceivable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AccountsReceivable  $accountsReceivable
     * @return \Illuminate\Http\Response
     */
    public function edit(AccountsReceivable $accountsReceivable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAccountsReceivableRequest  $request
     * @param  \App\Models\AccountsReceivable  $accountsReceivable
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAccountsReceivableRequest $request, AccountsReceivable $accountsReceivable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AccountsReceivable  $accountsReceivable
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccountsReceivable $accountsReceivable)
    {
        //
    }
}
