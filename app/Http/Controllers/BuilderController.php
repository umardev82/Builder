<?php

namespace App\Http\Controllers;

use App\Models\Admin\Builder;
use App\Http\Requests\StoreBuilderRequest;
use App\Http\Requests\UpdateBuilderRequest;
use GuzzleHttp\Psr7\Response;


class BuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBuilderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Builder $builder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Builder $builder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBuilderRequest $request, Builder $builder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Builder $builder)
    {
        //
    }
}
