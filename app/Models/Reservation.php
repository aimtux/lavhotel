<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservation';
    protected $fillable = [
    	'customer_kode', 'extrabed', 'checkin', 'checkout', 'total', 'cash', 'payment', 'status'
    ];

    public function customer(){
    	return $this->belongsTo(Customer::class);
    }

    public function roomtype(){
    	return $this->belongsTo(RoomType::class);
    }
}
