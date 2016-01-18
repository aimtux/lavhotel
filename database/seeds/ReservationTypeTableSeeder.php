<?php

use Illuminate\Database\Seeder;

class ReservationTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservation = [
        	[
        		'customer_kode'=>'T01666', 'roomtype_kode'=>'vip', 'extrabed'=>0, 
        		'checkin'=>'2016-01-01', 'checkout'=>'2016-01-03', 'day'=>3, 
        		'total'=>2100000, 'cash'=>2100000, 'payment'=>'lunas', 'status'=>'checkout'
        	]
        ];

        DB::table('reservation')->insert($reservation);
    }
}
