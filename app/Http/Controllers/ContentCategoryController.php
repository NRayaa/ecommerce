<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;


class ContentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $contentCategory=Http::withHeaders([
            'Accept'=>'application/json',
            'Authorization'=>'Bearer 378|Efb9Nus2Jz0u5evHN5yrxJJoo2E3TzYiMutAcUtC7ae81558'
        ])->get('https://erp.digitalindustryagency.com/api/category-contents');
        // dd($contentCategory->json());
        return view('menu-content.category-content.index', compact('contentCategory'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu-content.category-content.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
        {
            // Validasi request (jika diperlukan)
            $validatedData = $request->validate([
                'category_name' => 'required|string',
                'category_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // contoh validasi untuk file gambar (sesuaikan dengan kebutuhan)
            ]);

            // Mengambil file foto dari request
            $file = $request->file('category_photo');

            // Menyiapkan header yang perlu disertakan dalam permintaan
            $headers = [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer 378|Efb9Nus2Jz0u5evHN5yrxJJoo2E3TzYiMutAcUtC7ae81558',
            ];

            // Mengirimkan data dan file foto ke API eksternal dengan penambahan header
            $response = Http::withHeaders($headers)
                ->attach(
                    'category_photo', // Nama field untuk file di API
                    file_get_contents($file->getRealPath()), // Konten dari file
                    $file->getClientOriginalName() // Nama file
                )
                ->post('https://erp.digitalindustryagency.com/api/category-contents', $validatedData);

            // Mendapatkan respons dari API
            $responseData = $response->json(); // Mendapatkan data JSON dari respons

            // Respon sesuai dengan kebutuhan Anda
            if ($response->successful()) {
                return redirect()->route('category-content.index')->with('success', 'Data successfully sent to API');
            } else {
                // Respon sesuai dengan kebutuhan Anda jika terjadi kesalahan
                return response()->json(['message' => 'Failed to send data to API', 'response' => $responseData], $response->status());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Membuat header Authorization dengan bearer token
        $headers = [
            'Accept'=>'application/json',
            'Authorization' => 'Bearer 378|Efb9Nus2Jz0u5evHN5yrxJJoo2E3TzYiMutAcUtC7ae81558',
        ];

        // Lakukan permintaan ke API untuk mendapatkan data kategori berdasarkan ID dengan header yang ditentukan
        $response = Http::withHeaders($headers)->get("https://erp.digitalindustryagency.com/api/category-contents/{$id}");

        if ($response->ok()) {
            $category = $response->json(); // Data kategori dari API
            return view('menu-content.category-content.edit', compact('category'));
        } else {
            // Handle jika terjadi error saat mengambil data dari API
            return back()->with('error', 'Failed to fetch category data');
        }
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
    public function update(Request $request, $id)
    {
        $formData = $request->validate([
            'category_name' => 'required|string',
            'category_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan validasi dengan kebutuhan
        ]);

        // Membuat header Authorization dengan bearer token
        $headers = [
            'Accept'=>'application/json',
            'Authorization' => 'Bearer 378|Efb9Nus2Jz0u5evHN5yrxJJoo2E3TzYiMutAcUtC7ae81558',
        ];

        // Cek apakah ada file yang diunggah
        if ($request->hasFile('category_photo')) {
            $formData['category_photo'] = [
                'contents' => file_get_contents($request->file('category_photo')),
                'file_name' => $request->file('category_photo')->getClientOriginalName(),
            ];

            // Lakukan pemrosesan form untuk update dengan foto
            $response = Http::withHeaders($headers)->attach(
                'category_photo',
                $formData['category_photo']['contents'],
                $formData['category_photo']['file_name']
            )->put("https://erp.digitalindustryagency.com/api/category-contents/{$id}", $formData);
        } else {
            // Jika tidak ada file yang diunggah, hanya update nama kategori
            unset($formData['category_photo']);

            // Lakukan pemrosesan form untuk update tanpa foto
            $response = Http::withHeaders($headers)->put("https://erp.digitalindustryagency.com/api/category-contents/{$id}", $formData);
            dd($response->json());
        }

        if ($response->ok()) {
            return redirect()->route('category-content.index')->with('success', 'Category updated successfully');
        } else {
            // Handle jika terjadi error saat melakukan update melalui API
            return back()->with('error', 'Failed to update category');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Http::withHeaders([
            'Accept'=>'application/json',
            'Authorization'=>'Bearer 378|Efb9Nus2Jz0u5evHN5yrxJJoo2E3TzYiMutAcUtC7ae81558'
        ])->delete('https://erp.digitalindustryagency.com/api/category-contents/'. $id);
        return redirect()->route('category-content.index');
    }
}
