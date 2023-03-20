<?php

namespace App\Http\Controllers;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index()
    {
        $players = [
            ['name' => 'John', 'money' => 1000],
            ['name' => 'Jane', 'money' => 2000],
            ['name' => 'Bob', 'money' => 1500],
        ];

        return view('players.index', compact('players'));
    }
}

