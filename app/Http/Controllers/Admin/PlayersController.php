<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Player;
use App\Models\Players;
use Illuminate\Http\Request;
use Illuminate\Testing\Fluent\Concerns\Has;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = Players::all();
        return view('admin.players.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.players.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'player_rank' => 'required',
        ]);
        // create data
        $input = $request->all();


        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }


        Players::create($input);


        return redirect()->route('players.index')
            ->with('success', 'Player created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Players $player
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Players $player)
    {

        return view('admin.players.show', compact('player'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Players $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Players $player)
    {

        return view('admin.players.edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Players $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Players $player)
    {
        // validation
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'player_rank' => 'required',

        ]);

        // find and update data
//
        $player->fill($request->all())->save();


        return redirect()->route('players.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Players $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Players $player)
    {
        $player->delete();



        return redirect()->route('players.index')

            ->with('success','Product deleted successfully');
    }
}
