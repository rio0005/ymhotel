<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index() {
        $rooms = Room::all();
        return view('room.index',compact('rooms'));
        $validated['room_type_id'] = auth()->id();
    }

    public function create() {
        return view('room.create');
    }
}
