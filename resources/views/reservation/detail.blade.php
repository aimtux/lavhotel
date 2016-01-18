@extends('layouts.table')
@section('content')
	<header class="page-header">
			<h2>Basic Tables</h2>
		
			<div class="right-wrapper pull-right">
				<ol class="breadcrumbs">
					<li>
						<a href="index.html">
							<i class="fa fa-home"></i>
						</a>
					</li>
					<li><span>Tables</span></li>
					<li><span>Basic</span></li>
				</ol>
		
				<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
			</div>
		</header>

		<!-- start: page -->
		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">
						<div class="panel-actions">
							<a href="#" class="fa fa-caret-down"></a>
							<a href="#" class="fa fa-times"></a>
						</div>
		
						<h2 class="panel-title">Detail Customer</h2>
					</header>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-hover mb-none">
								<thead>
									
								</thead>
								<tbody>
									<tr>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Email</th>
										<th>Phone</th>
									</tr>
									<tr>
										<td>{{ $customer->nama_depan }}</td>
										<td>{{ $customer->nama_belakang }}</td>
										<td>{{ $customer->email }}</td>
										<td>{{ $customer->phone }}</td>
									</tr>
									<tr>
										<th>Check-in</th>
										<th>Check-out</th>
										<th>Extrabed</th>
										<th>Day(s)</th>
									</tr>
									<tr>
										<td>{{ $reservation->checkin }}</td>
										<td>{{ $reservation->checkout }}</td>
										<td>{{ $reservation->extrabed }}</td>
										<td>{{ $reservation->day }}</td>
									</tr>
									<tr>
										<th>Total Tagihan</th>
										<th>Sisa Bayar</th>
										<th>Status Bayar</th>
										<th>Status Menginap</th>
									</tr>
									<tr>
										<td>Rp {{ number_format($reservation->total) }}</td>
										<td>{{ $tagihan }}</td>
										<td>{{ $reservation->payment }}</td>
										<td>{{ $reservation->status }}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</section>
			</div>
		</div>
		<a href="{{URL('/admin/pesan/'.$customer->kode).'/create'}}"><button type="button" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-plus"></i> Add Data</button></a>
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="#" class="fa fa-caret-down"></a>
					<a href="#" class="fa fa-times"></a>
				</div>
		
				<h2 class="panel-title">Transaction</h2>
			</header>
			<div class="panel-body">
				<table class="table table-bordered table-striped mb-none" id="datatable-default">
					<thead>
						<tr>
							<th>No</th>
							<th>Checkin</th>
							<th>CheckOut</th>
							<th>Total</th>
							<th>Cash</th>
							<th>Payment</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						{{-- */$x=0;/* --}}
						@foreach ($transaksi as $data)
						{{-- */$x++;/* --}}
							<tr class="gradeX">
								<td>{{ $x }}</td>
								<td>{{ $data->checkin }}</td>
								<td>{{ $data->checkin }}</td>
								<td>{{ $data->total }}</td>
								<td>{{ $data->cash }}</td>
								<td>{{ $data->payment }}</td>
								<td>{{ $data->status }}</td>
								<td>Action</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</section>
@stop