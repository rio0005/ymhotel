<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    public function index() {
        $guests=Guest::all();
        return view('guest.index',compact('guests'));
    }

    public function form() {
        return view('guest.form');
    }

    public function create() {
        return view('guest.create');
    }

    public function store(Request $request) {
        $guest = Guest::create([
            'name' => $request->name,
            'address' => $request->address,
            'tel' => $request->tel
        ]);
        return back();
    }

}
