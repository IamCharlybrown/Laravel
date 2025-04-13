<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseController extends Controller
{
    public function index()
    {
        $universes = Universe::all();
        return response()->json($universes);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $universe = Universe::create([
            'name' => $validated['name'],
        ]);

        return response()->json([
            'message' => 'Universe created successfully!',
            'data' => $universe
        ], 201);
    }

    public function show(string $id)
    {
        $universe = Universe::with('superheroes')->find($id);

        if (!$universe) {
            return response()->json(['message' => 'Universe not found.'], 404);
        }

        return response()->json($universe);
    }

    public function update(Request $request, string $id)
    {
        $universe = Universe::find($id);

        if (!$universe) {
            return response()->json(['message' => 'Universe not found.'], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $universe->update([
            'name' => $validated['name'],
        ]);

        return response()->json([
            'message' => 'Universe updated successfully!',
            'data' => $universe
        ]);
    }

    public function destroy(string $id)
    {
        $universe = Universe::find($id);

        if (!$universe) {
            return response()->json(['message' => 'Universe not found.'], 404);
        }

        $universe->delete();

        return response()->json(['message' => 'Universe deleted successfully.']);
    }
}
