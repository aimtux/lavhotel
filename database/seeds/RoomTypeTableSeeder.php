<?php

use Illuminate\Database\Seeder;

class RoomTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roomtype = [
        	['kode'=>'vip', 'nama'=>'VIP', 'harga'=>700000],
        	['kode'=>'suite', 'nama'=>'Suite', 'harga'=>1000000]
        ];

        DB::table('room_type')->insert($roomtype);
    }
}
