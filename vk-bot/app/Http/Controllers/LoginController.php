<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Added import for Hash facade
use App\Models\User; // Added import for the User model

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('name', 'password');

        // Retrieve the hashed password from the database based on the provided username
        $user = User::where('name', $credentials['name'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Passwords match
            Auth::login($user);
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return redirect('/login')->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ]);
    }

    public function addNewUser()
    {
        // Your code for adding a new user
    }
}
