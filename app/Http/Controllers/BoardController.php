<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index()
    {
        $player_id = $request->player_id;
        $piece = $request->piece;

        // Simpan pilihan pion ke dalam database
        $player = Player::find($player_id);
        $player->piece = $piece;
        $player->save();

        // Tampilkan halaman board game dengan pion pilihan
        return view('board', compact('piece'));
    }
}
