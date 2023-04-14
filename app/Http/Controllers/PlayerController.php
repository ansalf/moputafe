<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();

        return view('players.index', compact('players'));
    }

    public function create()
    {
        return view('players.create');
    }

    public function store(Request $request)
    {
        $player = new Player;
        $player->name = $request->name;
        $player->money = $request->money;
        $player->position = $request->position;
        $player->save();

        return redirect()->route('players.index')->with('success', 'Player created successfully.');
    }

    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    public function edit(Player $player)
    {
        return view('players.edit', compact('player'));
    }

    public function update(Request $request, Player $player)
    {
        $player->name = $request->name;
        $player->money = $request->money;
        $player->position = $request->position;
        $player->save();

        return redirect()->route('players.index')->with('success', 'Player updated successfully.');
    }

    public function destroy(Player $player)
    {
        $player->delete();

        return redirect()->route('players.index')->with('success', 'Player deleted successfully.');
    }
}
