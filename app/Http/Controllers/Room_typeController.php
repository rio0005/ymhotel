<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room_type;

class Room_typeController extends Controller
{
    public function create() {
        return view('room_type.create');
    }
}
