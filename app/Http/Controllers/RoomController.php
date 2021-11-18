<?php

namespace App\Http\Controllers;

use App\Models\room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        $room = room::all();
        return view('backend.room.list', compact('room'));
    }

    public function show()
    {

    }
}
