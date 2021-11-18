<?php

namespace Database\Seeders;

use App\Models\room;
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
        for($i=0; $i<15; $i++) {
            $room = new room();
            $room->name = "Phong".mt_rand(1,100);
            $room->status = mt_rand(0,1);
            $room->save();
        }
    }
}
