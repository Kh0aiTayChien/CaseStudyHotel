<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatRoomRequest;
use App\Models\Order;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function index()
    {
        $room = Room::all();

        return view('backend.room.list', compact('room'));
    }
    public function order(Request $request){
        $order = new Order();
        if($request->time == 1 )
        $order->time_in = Carbon::now()->timestamp;
        if($request->time == 2 )
            $order->time_out = Carbon::now()->timestamp;
        $order->save();
    }

    public function create()
    {
        return view('backend.room.create');

    }

    public function store(CreatRoomRequest $request)
    {
        $Room = new Room();
        if (!$request->hasFile('image')) {
            $path = '';
        } else {
            $path = $request->file('image')->store('images', 'public');
            $Room->image = $path;
            $Room->name = $request->name;
            $Room->price = $request->price;
            if ($request->id_room == "Phòng Đơn")
                $Room->id_room = 1;
            if ($request->id_room == "Phòng Đôi")
                $Room->id_room = 2;
            if ($request->id_room == "Phòng Vip")
                $Room->id_room = 3;

            if ($request->status == "Phòng Trống")
                $Room->status = 1;
            if ($request->status == "Đang Thuê")
                $Room->status = 2;
            if ($request->status == "Đang Sửa Chữa")
                $Room->status = 3;
            $Room->Describle = $request->describle;
            $Room->save();
            return redirect()->route('room.index');

        }
    }


    public function updatestatus(Request $request)
    {
        $id = $_POST['id'];
        $room = Room::findOrFail($id);

        if ($room->Status == 1) {
            $room->Status = 2;
        } else {
            $room->Status = 1;
        }
        $room->update();
        return response()->json(['status' => $room->Status
        ]);
    }

    public function showroom()
    {
        $Rooms = Room::all();
        return view('backend.room.list2', compact('Rooms'));
    }

    public function edit($id)
    {
        $room = Room::findOrFail($id);
        return view('backend.room.update',compact('room'));
    }
    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);
        if (!$request->hasFile('image')) {
            $path = $room->image;
        } else {
            $path = $request->file('image')->store('images', 'public');
        }
        $room->image = $path;
        $room->name = $request->name;
        $room->price = $request->price;
        $room->Status= $request->status;
        $room->id_room= $request->id_room;
        if ($request->status == "Phòng Trống")
            $room->status = 1;
        if ($request->status == "Đang Thuê")
            $room->status = 2;
        if ($request->status == "Đang Sửa Chữa")
            $room->status = 3;

        if ($request->id_room  == "Phòng Đơn")
        $room->id_room = 1;
        if ($request->id_room == "Phòng Đôi")
         $room->id_room = 2;
        if ($request->id_room == "Phòng Vip")
          $room->id_room = 3;

        $room->Describle= $request->describle;
        $room->save();
        return redirect()->route('room.showroom');
    }
    public function delete($id)
    {
        $Room = Room::findOrFail($id);
        $Room->delete();
        return redirect()->route('room.showroom');
    }
    public function search($input)
    {
        if (!empty($input)) {
            $value = $input;
            $rooms = Room::where('name', 'LIKE', '%' . $value . '%')->get();
        } else {
            $rooms  = Room::all();
        }
        return response()->json($rooms);
    }
    public function filterTypeRoom($id)
    {
        $rooms  = Room::where('id_room', 'LIKE', '%' . $id . '%')->get();
        return response()->json($rooms);
    }
}
