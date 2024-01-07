<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $token = session('token');
        $promos=Http::withHeaders([
            'Accept'=>'application/json',
            'Authorization'=>"Bearer $token",
        ])->get('https://erp.digitalindustryagency.com/api/promos');
        return view('menu-content.promo.index', compact('promos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $token = session('token');

        $product=Http::withHeaders([
            'Accept'=>'application/json',
            'Authorization'=>"Bearer $token",
        ])->get('https://erp.digitalindustryagency.com/api/contents');
        // dd($product->json());
        return view('menu-content.promo.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $token = session('token');

        $validatedDataProduct = $request->validate([
            'product_id' => 'required',
            'discount' => 'required',
            'duedate' => 'required',
            'limit' => 'required',
            'caption' => 'required',
            'title' => 'required'
        ]);

        $headers = [
            'Accept'=>'application/json',
            'Authorization'=>"Bearer $token",
        ];

        $response = Http::withHeaders($headers)
        ->post('https://erp.digitalindustryagency.com/api/promos', $validatedDataProduct);

        dd($response->json());


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
