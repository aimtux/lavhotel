<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = [
        	['kode'=>'T01666', 'nama_depan'=>'Yehuda', 'nama_belakang'=>'Bagaskara', 
                'email'=>'bagaskarayehuda@gmail.com', 'phone'=>'+6289600010001']
        ];

        DB::table('customer')->insert($customer);
    }
}
