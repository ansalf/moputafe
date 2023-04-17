<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request) 
    {
        $validateData = $request->validate([
            'name' => 'required',
            'username' => 'required|min:3|max:50|unique:users',
            'password' => 'required',
        ], [
            'name.required' => 'Name must be filled',
            'username.unique' => 'Username has already taken',
            'username.required' => 'Username must be filled',
            'username.min' => 'Please, input at least 3 character',
            'username.max' => 'Sorry, maximal is 50 character',
            'password.required' => 'Password must be filled',
        ]);
        $validateData['password'] = Hash::make($validateData['password']);
        $validateData['role'] = 'hotel_guest';
        User::create($validateData);
        return redirect('dashboard')
        ->with('pesan', "Penambahan data {$validateData['name']} berhasil");
    }
}