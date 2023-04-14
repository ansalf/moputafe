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
            'name' => 'required|size:8|unique:mahasiswas',
            'username' => 'required|min:3|max:50',
            'password' => 'required',
        ], [
            'name.required' => 'Name must be filled',
            'name.size' => 'Name must have 8 character',
            'name.unique' => 'Name has already taken',
            'username.required' => 'Username must be filled',
            'username.min' => 'Please, input at least 3 character',
            'username.max' => 'Sorry, maximal is 50 character',
            'password.required' => 'Password must be filled',
        ]);
        $validateData['password'] = Hash::make($validateData['password']);
        $validateData['role'] = 'hotel_guest';
        Register::store($validateData);
        return redirect()->route('dashboard')
        ->with('pesan', "Penambahan data {$validateData['nama']} berhasil");
    }
}