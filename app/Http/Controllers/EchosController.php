<?php

namespace App\Http\Controllers;

use App\Models\Echos;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EchosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        //
        return response('Hello world');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Echos $echos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Echos $echos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Echos $echos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Echos $echos)
    {
        //
    }
}
