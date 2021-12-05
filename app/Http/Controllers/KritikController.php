<?php

namespace App\Http\Controllers;

use App\Models\Kritik;
use App\Http\Requests\StoreKritikRequest;
use App\Http\Requests\UpdateKritikRequest;

class KritikController extends Controller
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
     * @param  \App\Http\Requests\StoreKritikRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKritikRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kritik  $kritik
     * @return \Illuminate\Http\Response
     */
    public function show(Kritik $kritik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kritik  $kritik
     * @return \Illuminate\Http\Response
     */
    public function edit(Kritik $kritik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKritikRequest  $request
     * @param  \App\Models\Kritik  $kritik
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKritikRequest $request, Kritik $kritik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kritik  $kritik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kritik $kritik)
    {
        //
    }
}
