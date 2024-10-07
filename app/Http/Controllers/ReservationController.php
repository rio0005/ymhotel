<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{

    public function index()
    {
        $reservations = Reservation::all();
        return view('reservation.index', compact('reservations'));
        // $validated['guest_id'] = auth()->id();
    }

    public function create() {
        return view('reservation.create');
    }

    public function form(){
        return view('reservation.form');
    }



    public function store(Request $request) {
        $reservations = Reservation::create([
            'guest_id' => $request->guest_id,
            'people' => $request->people,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out
        ]);
        return back();
    }
}
