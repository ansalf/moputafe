<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role === 'admin') {
            $title = 'Administrator Dashboard';

            return view('admin.index', compact('title'));
        } elseif (Auth::user()->role === 'user') {
            $title = 'User Dashboard';

            return view('User.index', compact('title'));
        } 
    }
}