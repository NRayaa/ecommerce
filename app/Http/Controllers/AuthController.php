<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $response = Http::post('https://erp.digitalindustryagency.com/api/login', [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ]);

        $data = $response->json();

        // Cek apakah login berhasil
        if ($data['success']) {
            // Set session atau token di sini
            session(['token' => $data['token']]);
            return redirect()->route('dashboard'); // Ganti dengan nama route dashboard kamu
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
