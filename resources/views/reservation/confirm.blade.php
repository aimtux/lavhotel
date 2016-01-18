@extends('layouts.form')
@section('content')
	<section role="main" class="content-body">
		<header class="page-header">
			<h2>Basic Forms</h2>
		
			<div class="right-wrapper pull-right">
				<ol class="breadcrumbs">
					<li>
						<a href="index.html">
							<i class="fa fa-home"></i>
						</a>
					</li>
					<li><span>Forms</span></li>
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
	
					<h2 class="panel-title">Customer &amp; Reservation Info</h2>
				</header>
				<div class="panel-body">
					<div class="row">
					{!! Form::open(['method' => 'POST', 'url' => '/admin/pesan/store', 'class' => 'form-horizontal', 'novalidate'=>'novalidate']) !!}
					
					   <div class="col-md-6">

								<div class="form-group">
						<div class="form-group @if($errors->first('kode')) has-error @endif">
						    {!! Form::label('kode', 'Kode', ['class'=>'col-sm-3 control-label']) !!}
						    <div class="col-sm-6">
							    {!! Form::text('kode', $data['kode'], ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly']) !!}
							    <small class="text-danger">{{ $errors->first('kode') }}</small>
							</div>
						</div>
	
						<div class="form-group @if($errors->first('nama_depan')) has-error @endif">
						    {!! Form::label('nama_depan', 'First Name', ['class'=>'col-sm-3 control-label']) !!}
						    <div class="col-sm-6">
							    {!! Form::text('nama_depan', $data['nama_depan'], ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly']) !!}
							    <small class="text-danger">{{ $errors->first('nama_depan') }}</small>
							</div>
						</div>
	
						<div class="form-group @if($errors->first('nama_belakang')) has-error @endif">
						    {!! Form::label('nama_belakang', 'Last Name', ['class'=>'col-sm-3 control-label']) !!}
						    <div class="col-sm-6">
							    {!! Form::text('nama_belakang', $data['nama_belakang'], ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly']) !!}
							    <small class="text-danger">{{ $errors->first('nama_belakang') }}</small>
							</div>
						</div>
	
						<div class="form-group @if($errors->first('email')) has-error @endif">
						    {!! Form::label('email', 'Email', ['class'=>'col-sm-3 control-label']) !!}
						    <div class="col-sm-6">
							    {!! Form::text('email', $data['email'], ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly']) !!}
							    <small class="text-danger">{{ $errors->first('email') }}</small>
							</div>
						</div>
	
						<div class="form-group @if($errors->first('phone')) has-error @endif">
						    {!! Form::label('phone', 'Phone Number', ['class'=>'col-sm-3 control-label']) !!}
						    <div class="col-sm-6">
							    {!! Form::text('phone', $data['phone'], ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly']) !!}
							    <small class="text-danger">{{ $errors->first('phone') }}</small>
							</div>
						</div>

						<div class="form-group @if($errors->first('customer_kode')) has-error @endif">
						    {!! Form::label('customer_kode', 'Customer Kode', ['class'=>'col-sm-3 control-label']) !!}
						    <div class="col-sm-6">
							    {!! Form::text('customer_kode', $data['customer_kode'], ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly']) !!}
							    <small class="text-danger">{{ $errors->first('customer_kode') }}</small>
							</div>
						</div>
	
						<div class="form-group @if($errors->first('roomtype_kode')) has-error @endif">
						    {!! Form::label('roomtype_kode', 'Room ID', ['class'=>'col-sm-3 control-label']) !!}
						    <div class="col-sm-6">
							    {!! Form::text('roomtype_kode', $data['roomtype_kode'], ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly']) !!}
							    <small class="text-danger">{{ $errors->first('roomtype_kode') }}</small>
							</div>
						</div>
	
						<div class="form-group @if($errors->first('extrabed')) has-error @endif">
						    {!! Form::label('extrabed', 'Extra Bed', ['class'=>'col-sm-3 control-label']) !!}
						    <div class="col-sm-6">
							    {!! Form::text('extrabed', $data['extrabed'], ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly']) !!}
							    <small class="text-danger">{{ $errors->first('extrabed') }}</small>
							</div>
						</div>
								</div>
						</div>

						<div class="col-md-6">
								<div class="form-group">
									<div class="form-group @if($errors->first('checkin')) has-error @endif">
						    {!! Form::label('checkin', 'Checkin', ['class'=>'col-sm-3 control-label']) !!}
						    <div class="col-sm-6">
							    {!! Form::text('checkin', $data['checkin'], ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly']) !!}
							    <small class="text-danger">{{ $errors->first('checkin') }}</small>
							</div>
						</div>

						<div class="form-group @if($errors->first('checkout')) has-error @endif">
						    {!! Form::label('checkout', 'Checkout', ['class'=>'col-sm-3 control-label']) !!}
						    <div class="col-sm-6">
							    {!! Form::text('checkout', $data['checkout'], ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly']) !!}
							    <small class="text-danger">{{ $errors->first('checkout') }}</small>
							</div>
						</div>
	
						<div class="form-group @if($errors->first('day')) has-error @endif">
						    {!! Form::label('day', 'Day(s)', ['class'=>'col-sm-3 control-label']) !!}
						    <div class="col-sm-6">
							    {!! Form::text('day', $data['day'], ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly']) !!}
							    <small class="text-danger">{{ $errors->first('day') }}</small>
							</div>
						</div>

						<div class="form-group @if($errors->first('total')) has-error @endif">
						    {!! Form::label('total', 'Total', ['class'=>'col-sm-3 control-label']) !!}
						    <div class="col-sm-6">
							    {!! Form::text('total', $data['total'], ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly']) !!}
							    <small class="text-danger">{{ $errors->first('total') }}</small>
							</div>
						</div>

						<div class="form-group @if($errors->first('cash')) has-error @endif">
						    {!! Form::label('cash', 'Cash', ['class'=>'col-sm-3 control-label']) !!}
						    <div class="col-sm-6">
							    {!! Form::text('cash', null, ['class' => 'form-control', 'required' => 'required', ]) !!}
							    <small class="text-danger">{{ $errors->first('cash') }}</small>
							</div>
						</div>

						<div class="form-group @if($errors->first('payment')) has-error @endif">
						    {!! Form::label('payment', 'Payment Status',['class'=>'col-sm-3 control-label']) !!}
						    <div class="col-sm-6">
							    {!! Form::select('payment', $payment, null, ['id' => 'payment', 'class' => 'form-control', 'required' => 'required',]) !!}
							    <small class="text-danger">{{ $errors->first('payment') }}</small>
						    </div>
						</div>

						<div class="form-group @if($errors->first('status')) has-error @endif">
						    {!! Form::label('status', 'Occupancy',['class'=>'col-sm-3 control-label']) !!}
						    <div class="col-sm-6">
							    {!! Form::select('status', $status, null, ['id' => 'status', 'class' => 'form-control', 'required' => 'required',]) !!}
							    <small class="text-danger">{{ $errors->first('status') }}</small>
						    </div>
						</div>
					
					    <div class="btn-group pull-right col-sm-6">
					        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
					        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
					    </div>
					
					{!! Form::close() !!}
						
	
									</div>
								</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
<!-- end: page -->
	</section>
@stop