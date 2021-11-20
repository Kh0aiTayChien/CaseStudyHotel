<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $RoomType = new RoomType();
        $RoomType->id = "1";
        $RoomType->name = "Phòng Đơn";
        $RoomType->describle = "ádasfafasfasf";
        $RoomType->save();

        $RoomType = new RoomType();
        $RoomType->id = "2";
        $RoomType->name = "Phòng Đôi";
        $RoomType->describle = "ádasfafasfasf";
        $RoomType->save();

        $RoomType = new RoomType();
        $RoomType->id = "3";
        $RoomType->name = "Phòng VIP";
        $RoomType->describle = "ádasfafasfasf";
        $RoomType->save();
    }
}
