<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characters = character::all();
        return view('characters.index')->with('characters', $characters);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('characters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $input = $request->all();
        Character::create($input);
        return redirect('characters')->with('flash_message', 'Character Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $character = Character::find($id);
        return view('characters.show')->with('characters', $character);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $character = Character::find($id);
        return view('characters.edit')->with('characters', $character);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $character = Character::find($id);
        $input = $request->all();
        $character->update($input);
        return redirect('characters')->with('flash_message', 'character Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Character::destroy($id);
        return redirect('characters')->with('flash_message', 'Student deleted!');
    }
}
