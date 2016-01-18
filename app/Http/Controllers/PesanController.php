<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RoomType;
use App\Models\Customer;
use App\Models\Reservation;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PesanController extends Controller
{
    public function index()
    {
    	$kode = 'T'.date('d').rand(0,999);
    	$roomtype = RoomType::lists('nama', 'id');
    	$placeholder = 'Tambahan kasur seharga Rp 300000';
    	return view ('reservation.index', compact('kode', 'roomtype','placeholder'));
    }

    public function validation(Request $request)
    {
    	$kamar = RoomType::find($request->input('roomtype_kode'));
    	$data = [
    		'kode' => $request->input('kode'),
    		'nama_depan' => $request->input('nama_depan'),
    		'nama_belakang' => $request->input('nama_belakang'),
    		'email' => $request->input('email'),
    		'phone' => $request->input('phone'),
    		'customer_kode' => $request->input('kode'),
    		'roomtype_kode' => $request->input('roomtype_kode'),
    		'extrabed' => $request->input('extrabed'),
    		'checkin' => $request->input('checkin'),
    		'checkout' => $request->input('checkout'),
    		'day' => $request->input('day'),
    		'total' => ($kamar->harga * $request->input('day')) + (300000 * $request->input('extrabed')),
    	];
    	$payment = ['dp' => 'DP', 'lunas' => 'Lunas'];
    	$status = ['new' => 'New', 'pending' => 'Pending', 'checkin'=>'Checkin', 'checkout'=>'Checkout'];
    	
    	return view ('reservation/confirm',compact('data', 'payment', 'status'));
    }

    public function store(Request $request)
    {
    	$id = $request->input('kode');
    	$customer = [
    		'kode' => $request->input('kode'),
    		'nama_depan' => $request->input('nama_depan'),
    		'nama_belakang' => $request->input('nama_belakang'),
    		'email' => $request->input('email'),
    		'phone' => $request->input('phone'),
    	];
    	$reservation = [
    		'customer_kode' => $request->input('customer_kode'),
    		'roomtype_kode' => $request->input('roomtype_kode'),
    		'extrabed' => $request->input('extrabed'),
    		'checkin' => $request->input('checkin'),
    		'checkout' => $request->input('checkout'),
    		'day' => $request->input('day'),
    		'total' => $request->input('total'),
    		'cash' => $request->input('cash'),
    		'payment' => $request->input('payment'),
    		'status' => $request->input('status'),
    	];

    	DB::table('customer')->insert($customer);
    	DB::table('reservation')->insert($reservation);

    	return redirect('admin/pesan/'.$id);
    }

    public function showDetail($id)
    {
    	$customer = Customer::where('kode', $id)->firstOrFail();
    	$reservation = Reservation::where('customer_kode', $id)->orderBy('created_at', 'desc')->firstOrFail();
    	$transaksi = Reservation::where('customer_kode', $id)->orderBy('id','desc')->get();
    	$sisabayar = DB::table('reservation')->where('customer_kode', '=', $id)->sum('cash');
    	$tagihan = $reservation->total - $sisabayar;

    	return view ('reservation.detail', compact('customer', 'reservation', 'tagihan', 'transaksi'));
    }


    public function create($id)
    {
    	$payment = ['dp' => 'DP', 'lunas' => 'Lunas'];
    	$status = ['new' => 'New', 'pending' => 'Pending', 'checkin'=>'Checkin', 'checkout'=>'Checkout'];
    	$reservation = Reservation::where('customer_kode', $id)->orderBy('created_at', 'desc')->firstOrFail();
    	$sisabayar = DB::table('reservation')->where('customer_kode', '=', $id)->sum('cash');
    	$tagihan = $reservation->total - $sisabayar;

    	return view ('reservation.create', compact('reservation', 'payment', 'status', 'sisabayar', 'tagihan'));
    }

    public function storeData(Request $request, $id)
    {
    	Reservation::create($request->all());
    	return redirect('admin/pesan/'.$id);
    }
}
