<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $product=Http::withHeaders([
            'Accept'=>'application/json',
            'Authorization'=>'Bearer 454|GwcFfaT0gmJFFWeS74gBu4HkcpgHd6dc8GbOjxSF7d3302c4'
        ])->get('https://erp.digitalindustryagency.com/api/contents');
        //dd($product->json());

        return view('menu-content.product.index',compact('product'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $product=Http::withHeaders([
            'Accept'=>'application/json',
            'Authorization'=>'Bearer 454|GwcFfaT0gmJFFWeS74gBu4HkcpgHd6dc8GbOjxSF7d3302c4'
        ])->get('https://erp.digitalindustryagency.com/api/contents');
        $productlist=Http::withHeaders([
            'Accept'=>'application/json',
            'Authorization'=>'Bearer 454|GwcFfaT0gmJFFWeS74gBu4HkcpgHd6dc8GbOjxSF7d3302c4'
        ])->get('https://erp.digitalindustryagency.com/api/products');

        return view('menu-content.product.create',compact('product', 'productlist'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required',
            'price' => 'required',
            'color' => 'required',
            'description' => 'required',
            'category_content_id' => 'required',
            'tags.*' => 'required|string',
            'photos.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Upload photos and get URLs
        $photoUrls = [];
        foreach ($request->file('photos') as $photo) {
            $photoPath = $photo->store('photos', 'public');
            $photoUrls[] = asset('storage/' . $photoPath);
        }

        // Prepare data for API request
        $data = [
            'product_id' => $validatedData['product_name'],
            'price' => $validatedData['price'],
            'color' => $validatedData['color'],
            'description' => $validatedData['description'],
            'category_id' => $validatedData['category_id'],
            'tags' => $validatedData['tags'],
            'photos' => $photoUrls,
        ];
        // dd($data);
        // Make API request
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer 454|GwcFfaT0gmJFFWeS74gBu4HkcpgHd6dc8GbOjxSF7d3302c4',
        ])->post('https://erp.digitalindustryagency.com/api/contents', $data);

        dd($response->json());

        return redirect()->back()->with('success', 'Product created successfully.');




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

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
