<?php

namespace App\Http\Controllers;

use App\Models\Peran;
use App\Http\Requests\StorePeranRequest;
use App\Http\Requests\UpdatePeranRequest;

class PeranController extends Controller
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
     * @param  \App\Http\Requests\StorePeranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePeranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peran  $peran
     * @return \Illuminate\Http\Response
     */
    public function show(Peran $peran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peran  $peran
     * @return \Illuminate\Http\Response
     */
    public function edit(Peran $peran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePeranRequest  $request
     * @param  \App\Models\Peran  $peran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePeranRequest $request, Peran $peran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peran  $peran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peran $peran)
    {
        //
    }
}
