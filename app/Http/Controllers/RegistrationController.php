<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'company' => 'required',
            'address' => 'required',
            'password' => 'required|min:6',
        ]);

        // Storing it into the users table
        User::create($data);

        return 'Registration was successful!';
        // return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
}
