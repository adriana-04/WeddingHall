<?php

namespace App\Http\Controllers;

use App\Models\WeddingHall;
use Illuminate\Http\Request;

class WeddingHallController extends Controller
{
    public function index()
    {
    $weddingHalls = WeddingHall::with('owner')->get();
    return view('halls.index', compact('weddingHalls'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'owner_id' => 'required|exists:users,id',
            'name' => 'required|string',
            'description' => 'nullable|string',
            'location' => 'required|string',
            'capacity' => 'required|integer',
            'price_per_day' => 'required|numeric',
            'images' => 'nullable|json',
            'status' => 'in:available,unavailable'
        ]);

        $hall = WeddingHall::create($validated);
        return response()->json($hall, 201);
    }

    public function show(WeddingHall $weddingHall)
    {
        return response()->json($weddingHall->load('owner', 'bookings', 'reviews'));
    }

    public function update(Request $request, WeddingHall $weddingHall)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string',
            'description' => 'nullable|string',
            'location' => 'sometimes|string',
            'capacity' => 'sometimes|integer',
            'price_per_day' => 'sometimes|numeric',
            'images' => 'nullable|json',
            'status' => 'in:available,unavailable'
        ]);

        $weddingHall->update($validated);
        return response()->json($weddingHall);
    }

    public function destroy(WeddingHall $weddingHall)
    {
        $weddingHall->delete();
        return response()->json(null, 204);
    }
}
