<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller

{
    public function showLoginForm()
    {
        return view('login');
    }
    
    public function login(Request $request)
    {
        $apiBaseUrl = env('API_BASE_URL');

        $response = Http::post("$apiBaseUrl/login", [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'getToken' => 'true',
        ]);

        // Respuesta JSON
        $data = $response->json();

        if ($data['status'] && $data['code'] == 200) {
            // Autenticación exitosa
            $token = $data['token'];
            session()->put('token', $token);
            session()->put('data_user', $data['identity']);
            return redirect()->route('dashboard');
        } else {
            // En caso de error
            return redirect()->back()->with('error', $data['message']);
        }
    }

    public function logout()
    {
        session()->forget('token');
        session()->forget('data_user');
        return redirect()->route('login');
    }
}
