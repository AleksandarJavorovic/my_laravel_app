<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Register User
    public function register(Request $request)
    {
        // Validate
        $request->validate([
            'username' => ['required', 'max:255'],
            'email'    => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:3', 'confirmed'],
        ]);

        dd('ok');
        // Register
        // Login
        // Redirect

    }
}
