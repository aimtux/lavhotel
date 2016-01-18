<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $fillable = [
    	'kode', 'nama_depan', 'nama_belakang', 'email', 'phone'
    ];

    public function reservation(){
    	return $this->hasMany(Reservation::class);
    }
}
