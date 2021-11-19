<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function index(){
        $room = Room::all();
        return view('backend.room.list', compact('room'));
    }

    public function create(){
        return view('backend.room.create');

    }
    public function updatestatus(Request $request){
            $id = $_POST['id'];
            $room = Room::findOrFail($id);

            if($room->Status == 1){
                $room->Status=2;
            }else{
                $room->Status =1;
            }
            $room->update();
            return response()->json(['status'=> $room->Status
            ]                           );
        }

}
