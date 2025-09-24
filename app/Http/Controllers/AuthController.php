<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Register User
    public function register(Request $request)
    {
        // Validate
        $fields = $request->validate([
            'username' => ['required', 'max:255'],
            'email'    => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:3', 'confirmed'],
        ]);

        // Register
        $user = User::create($fields);

        // Login
        Auth::login($user);

        // Redirect
        return redirect()->route('home');
    }

    // Login User
    public function login(Request $request)
    {
        // Validate
        $fields = $request->validate([
            'email'    => ['required', 'email', 'max:255'],
            'password' => ['required'],
        ]);

        // dd($request);

        // Try to Login
        if (Auth::attempt($fields, $request->remember)) {
            // Redirect
            // return redirect()->route('home');
            // Redirect to intended page or dashboard
            return redirect()->intended('dashboard');
        } else {
            // Redirect Back with Error
            return back()->withErrors(['failed' => 'E-Mail or Password incorrect'])->withInput();
        }
    }

    // Logout User
    public function logout(Request $request)
    {
        // Logout the user
        Auth::logout();

        // Recommended: Invalidate the session and regenerate the CSRF token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to home page after logout
        return redirect()->route('home');
    }
}
