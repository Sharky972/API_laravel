<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CapacitiesResource;
use Illuminate\Http\Request;
use App\Models\Capacities;


class CapacitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all capacitiess
        $capacities = Capacities::all();

        // Return the capacitiess as JSON
        return CapacitiesResource::collection($capacities);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // On crée un nouveau capacities
        $capacities = Capacities::create([
            "id" => $request->id,
            "name" => $request->name,
            "color" => $request->color,
            "cost_id" => $request->cost_id,
            "type" => $request->type,
            "damage" => $request->damage,
            "faIcon" => $request->faIcon,
            "spellIcon" => $request->spellIcon,
            "description" => $request->description,
            "champions_id" => $request->champions_id,
        ]);

        // On retourne les informations du nouveau capacities en JSON
        return response()->json($capacities, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Capacities $capacities)
    {
        // Return the capacities as JSON
        return new CapacitiesResource($capacities);
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
