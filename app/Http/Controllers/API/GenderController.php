<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    public function index()
    {
        $genders = Gender::all();
        return response()->json($genders);
    }

    public function store(Request $request)
    {
        $gender = Gender::create([
            'name' => $request->name,
        ]);

        return response()->json([
            'message' => 'Gender created successfully.',
            'data' => $gender
        ], 201);
    }

    public function show($id)
    {
        $gender = Gender::with('superheroes')->find($id);

        if (!$gender) {
            return response()->json(['message' => 'Gender not found.'], 404);
        }

        return response()->json($gender);
    }

    public function update(Request $request, $id)
    {
        $gender = Gender::find($id);

        if (!$gender) {
            return response()->json(['message' => 'Gender not found.'], 404);
        }

        $gender->update([
            'name' => $request->name,
        ]);

        return response()->json([
            'message' => 'Gender updated successfully.',
            'data' => $gender
        ]);
    }

    public function destroy($id)
    {
        $gender = Gender::find($id);

        if (!$gender) {
            return response()->json(['message' => 'Gender not found.'], 404);
        }

        $gender->delete();

        return response()->json(['message' => 'Gender deleted successfully.']);
    }
}
