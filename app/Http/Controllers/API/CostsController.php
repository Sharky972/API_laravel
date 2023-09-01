<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CostResource;
use Illuminate\Http\Request;
use App\Models\Costs;

class CostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all costs
        $costs = Costs::all();

        // Return the costss as JSON
        return CostResource::collection($costs);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // On crée un nouveau costs
        $costs = Costs::create([
            "id" => $request->id,
            "name" => $request->name,
            "value" => $request->value,
            "faIcon" => $request->faIcon,
        ]);

        // On retourne les informations du nouveau costs en JSON
        return response()->json($costs, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Costs $costs)
    {
        // Return the costs as JSON
        return new CostResource($costs);
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
