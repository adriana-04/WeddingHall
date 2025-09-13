<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return response()->json(Booking::with('customer', 'hall')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'hall_id' => 'required|exists:wedding_halls,id',
            'booking_date' => 'required|date',
            'number_of_guests' => 'required|integer',
            'status' => 'in:pending,confirmed,cancelled',
            'total_price' => 'required|numeric'
        ]);

        $booking = Booking::create($validated);
        return response()->json($booking, 201);
    }

    public function show(Booking $booking)
    {
        return response()->json($booking->load('customer', 'hall'));
    }

    public function update(Request $request, Booking $booking)
    {
        $validated = $request->validate([
            'booking_date' => 'sometimes|date',
            'number_of_guests' => 'sometimes|integer',
            'status' => 'in:pending,confirmed,cancelled',
            'total_price' => 'sometimes|numeric'
        ]);

        $booking->update($validated);
        return response()->json($booking);
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return response()->json(null, 204);
    }
}
