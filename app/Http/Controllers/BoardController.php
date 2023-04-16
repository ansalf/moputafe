<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function settings()
    {
        return view('settings');
    }

    public function board(Request $request)
    {
        $player = new Player();
        $player->piece = $request->input('piece');
        $player->save();

        return view('board', ['player' => $player]);
    }
}
