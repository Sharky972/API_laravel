<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Champion;
use App\Http\Resources\ChampionResource;
use App\Models\Capacities;
use Illuminate\Database\Eloquent\Relations\Relation;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;


class ChampionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // // On récupère tous les tasks
        // $task = Task::with([
        //     'user' => fn (Relation $query) => $query->select(User::$VISIBLE)
        // ]);
        // $task = Task::paginate(10);

        // // On retourne les informations des utilisateurs en JSON
        // return $task;


        // // Return the champions as JSON
        // // return ChampionResource::collection($champions);
        // return $champions;


        // // Retrieve all champions
        // $champions = Champion::with([
        //     'capacities' => fn (Relation $query) => $query->select(Capacities::$VISIBLE)->with('cost'),
        // ])->get();

        $champions = Champion::get();

        return response()->json($champions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // On crée un nouveau champion
        $champion = Champion::create([
            "id" => $request->id,
            "avatar" => $request->avatar,
            "name" => $request->name,
            "pv" => $request->pv,
            "pvMax" => $request->pvMax,
            "mana" => $request->mana,
            "manaMax" => $request->manaMax,
            "isInvincible" => $request->isInvincible,
            "isDead" => $request->isDead,
            "class" => $request->class,
        ]);

        // On retourne les informations du nouveau champion en JSON
        return response()->json($champion, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Champion $champion)
    {
        // Return the champion as JSON
        return new ChampionResource($champion);
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
