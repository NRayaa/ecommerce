<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $response = Http::post('https://erp.digitalindustryagency.com/api/login', [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        $data = $response->json();

        if (isset($data['data']['resource'])) {
            $token = $data['data']['resource']['token'];

            // Set session atau token di sini
            session(['token' => $token]);

            return redirect()->route('dashboard');
        } else {
            // Handle jika login gagal
            return redirect()->route('login')->with('error', 'Login failed');
        }

    }

    public function logout()
    {
        // Hapus session atau token di sini
        session()->forget('token');
        return redirect()->route('login'); // Ganti dengan nama route login kamu
    }
}
