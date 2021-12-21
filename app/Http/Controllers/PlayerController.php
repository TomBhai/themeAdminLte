<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Testing\Fluent\Concerns\Has;

class PlayerController extends Controller
{
    public function index(Request $request)
    {
        $items = Player::all();
        return view('players.index', compact('items'));
    }

    public function show(Request $request)
    {
        $item = Player::findOrFail($request->id);
        return view('players.show', compact('item'));
    }
//    public function show(Request $request, $playerId)
//    {
//        return view('players.show', [
//            'player' => Player::findOrFail($playerId)
//        ]);
//    }

    public function create(Request $request)
    {
        return view('players.create');
    }

    public function store(Request $request)
    {
        // validation
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'player_rank' => 'required',
        ]);
        // create data
        Player::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'player_rank' => $request->input('player_rank'),

        ]);

        return redirect()->route('players.index');

    }

    public function update(Request $request, $playersId)

    {
        // validation
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'player_rank' => 'required',

        ]);

        // find and update data
        $players = Player::findOrFail($playersId);
        $players->fill($request->all())->save();


        return redirect()->route('players.index');
    }

    public function destroy(Player $player)
    {
        $player->delete();
        return back();
    }
}
