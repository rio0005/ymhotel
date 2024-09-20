<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;

class DetailController extends Controller
{
    public function index()
    {
        $details = Detail::all();
        return view('detail.index', compact('details'));
    }


    public function create() {
        return view('detail.create');
    }
}
