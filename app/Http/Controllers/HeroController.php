<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero=Http::withHeaders([
            'Accept'=>'application/json',
            'Authorization'=>'Bearer 25|AFXTaPxBgmm99ALBbFZaCdmQKiLHIioRhyygxRMu468205ad'
        ])->get('https://erp.digitalindustryagency.com/api/heroes');

        return view('menu-content.hero.index', compact('hero'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu-content.hero.create');
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
    public function show(string $id)
    {
        $hero=Http::withHeaders([
            'Accept'=>'application/json',
            'Authorization'=>'Bearer 378|Efb9Nus2Jz0u5evHN5yrxJJoo2E3TzYiMutAcUtC7ae81558'
        ])->get('https://erp.digitalindustryagency.com/api/heroes/'. $id);

        return view('menu-content.hero.edit', compact('hero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
