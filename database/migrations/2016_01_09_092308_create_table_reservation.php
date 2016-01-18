<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_kode');
            $table->string('roomtype_kode');
            $table->integer('extrabed');
            $table->date('checkin');
            $table->date('checkout');
            $table->integer('day');
            $table->integer('total');
            $table->integer('cash');
            $table->enum('payment', ['dp', 'lunas']);
            $table->enum('status', ['new', 'pending', 'checkin', 'checkout']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reservation');
    }
}
