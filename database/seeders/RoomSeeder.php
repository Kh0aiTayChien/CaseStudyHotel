<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<50; $i++) {
            $room = new Room();
            $room->name = "Phong".mt_rand(1,100);
            $room->status = mt_rand(1,2);
            $room->save();
        }
    }
}
