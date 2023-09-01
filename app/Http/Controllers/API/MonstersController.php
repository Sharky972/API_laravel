<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\MonstersResource;
use App\Models\Monsters;
use Illuminate\Http\Request;

class MonstersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all monsters
        $monsters = Monsters::all();

        // Return the monsters as JSON
        return MonstersResource::collection($monsters);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // On crée un nouveau monsters
        $monsters = Monsters::create([
            "id" => $request->id,
            "name" => $request->name,
            "pv" => $request->pv,
            "pvMax" => $request->pvMax,
            "stunnedMonsterDuration" => $request->stunnedMonsterDuration,
            "avatar" => $request->avatar,
        ]);

        // On retourne les informations du nouveau monsters en JSON
        return response()->json($monsters, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Monsters $monsters)
    {
        // Return the monsters as JSON
        return new MonstersResource($monsters);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
