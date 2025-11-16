<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function checkUser(Request $request)
    {
        // Validate incoming fields
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Check if user exists
        $user = User::where('email', $request->email)->first();

        // If user doesn't exist → redirect to registration
        if (!$user) {
            return response()->json([
                'status' => 'NEW_USER',
            ]);
        }

        // If user exists but password incorrect
        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => 'INVALID_CREDENTIALS',
            ]);
        }

        // Log the user in (creates session)
        Auth::login($user);

        return response()->json([
            'status' => 'EXISTING_USER',
        ]);
    }
}
