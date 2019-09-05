<?php

namespace App\Http\Controllers\API;

use App\PoProxResult;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PoProxResult as PoProxResultResource;


class PoProxResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PoProxResultResource::collection(PoProxResult::all());
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PoProxResult  $poProxResult
     * @return \Illuminate\Http\Response
     */
    public function show(PoProxResult $poProxResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PoProxResult  $poProxResult
     * @return \Illuminate\Http\Response
     */
    public function edit(PoProxResult $poProxResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PoProxResult  $poProxResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PoProxResult $poProxResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PoProxResult  $poProxResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(PoProxResult $poProxResult)
    {
        //
    }
}
