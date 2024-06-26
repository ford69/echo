<?php

namespace App\Http\Controllers;

use App\Models\Echos;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Inertia\Inertia;
use Inertia\Response;

class EchosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return Inertia::render('echos/index',[
            'echos' => Echos::with('user:id,name')->latest()->get(),
        ]);

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
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $request->user()->echos()->create($validated);

        return redirect(route('echos.index'));
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
