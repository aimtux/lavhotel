@extends('layouts.table')

@section('content')
	<header class="page-header">
		<h2>Advanced Tables</h2>
	
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.html">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span>Tables</span></li>
				<li><span>Customers</span></li>
			</ol>
	
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
	</header>

	<!-- start: page -->
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="#" class="fa fa-caret-down"></a>
					<a href="#" class="fa fa-times"></a>
				</div>
		
				<h2 class="panel-title">Customers</h2>
			</header>
			<div class="panel-body">
				<table class="table table-bordered table-striped mb-none" id="datatable-default">
					<thead>
						<tr>
							<th>No</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						{{-- */$x=0;/* --}}
						@foreach ($customer as $data)
						{{-- */$x++;/* --}}
							<tr class="gradeX">
								<td>{{ $x }}</td>
								<td><a href="{{ URL('/admin/pesan/'.$data->kode) }}">{{ $data->nama_depan }}</a></td>
								<td>{{ $data->nama_belakang }}</td>
								<td>{{ $data->email }}</td>
								<td>{{ $data->phone }}</td>
								<td>Action</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</section>
	<!-- end: page -->
@stop