<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use App\Models\SuperHero;
use App\Models\Universe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuperHeroController extends Controller
{
    public function index()
    {
        $superheroes = SuperHero::with(['gender', 'universe'])->get();
        return response()->json($superheroes);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'gender_id' => 'required|exists:genders,id',
            'universe_id' => 'required|exists:universes,id',
            'name' => 'required|string|max:255',
            'real_name' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('picture')) {
            $imagePath = $request->file('picture')->store('superheroes', 'public');
        }

        $superhero = SuperHero::create([
            'gender_id' => $validated['gender_id'],
            'universe_id' => $validated['universe_id'],
            'name' => $validated['name'],
            'real_name' => $validated['real_name'],
            'picture' => $imagePath,
        ]);

        return response()->json([
            'message' => 'Superhero created successfully!',
            'data' => $superhero
        ], 201);
    }

    public function show(string $id)
    {
        $superhero = SuperHero::with(['gender', 'universe'])->find($id);

        if (!$superhero) {
            return response()->json(['message' => 'Superhero not found.'], 404);
        }

        return response()->json($superhero);
    }

    public function update(Request $request, string $id)
    {
        $superhero = SuperHero::find($id);

        if (!$superhero) {
            return response()->json(['message' => 'Superhero not found.'], 404);
        }

        $validated = $request->validate([
            'gender_id' => 'required|exists:genders,id',
            'universe_id' => 'required|exists:universes,id',
            'name' => 'required|string|max:255',
            'real_name' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('picture')) {
            if ($superhero->picture) {
                Storage::disk('public')->delete($superhero->picture);
            }
            $imagePath = $request->file('picture')->store('superheroes', 'public');
        } else {
            $imagePath = $superhero->picture;
        }

        $superhero->update([
            'gender_id' => $validated['gender_id'],
            'universe_id' => $validated['universe_id'],
            'name' => $validated['name'],
            'real_name' => $validated['real_name'],
            'picture' => $imagePath,
        ]);

        return response()->json([
            'message' => 'Superhero updated successfully!',
            'data' => $superhero
        ]);
    }

    public function destroy(string $id)
    {
        $superhero = SuperHero::find($id);

        if (!$superhero) {
            return response()->json(['message' => 'Superhero not found.'], 404);
        }

        if ($superhero->picture) {
            Storage::disk('public')->delete($superhero->picture);
        }

        $superhero->delete();

        return response()->json(['message' => 'Superhero deleted successfully.']);
    }
}
