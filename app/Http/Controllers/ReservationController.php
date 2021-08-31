<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return response()->json([
            'data' => $reservations
        ], 200);
    }
    public function show($reservationId)
    {
        $reservation = Reservation::where('id', $reservationId)->first();
        return response()->json([
            'data' => $reservation
        ], 200);
    }
}
