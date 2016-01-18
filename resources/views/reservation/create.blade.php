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
		<div class="col-lg-8">
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
						{!! Form::open(['method' => 'POST', 'url' => '/admin/pesan/'.$reservation->customer_kode, 'class' => 'form-horizontal', 'novalidate'=>'novalidate']) !!}
					
						<div class="col-lg-12">
							<div class="form-group">
								<div class="form-group @if($errors->first('customer_kode')) has-error @endif">
								    {!! Form::label('customer_kode', 'Customer Code', ['class'=>'col-sm-3 control-label']) !!}
								    <div class="col-sm-6">
									    {!! Form::text('customer_kode', $reservation->customer_kode, ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly']) !!}
									    <small class="text-danger">{{ $errors->first('customer_kode') }}</small>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Check-In</label>
									<div class="col-md-6">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
											<input type="text" name="checkin" data-plugin-datepicker="" class="form-control" required='' data-date-format="yyyy-mm-dd" value="{{ $reservation->checkin }}">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Check-Out</label>
									<div class="col-md-6">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
											<input type="text" name="checkout" data-plugin-datepicker="" class="form-control" required='' data-date-format="yyyy-mm-dd" value="{{ $reservation->checkout }}">
										</div>
									</div>
								</div>
								<div class="form-group @if($errors->first('day')) has-error @endif">
								    {!! Form::label('day', 'Day(s)', ['class'=>'col-sm-3 control-label']) !!}
								    <div class="col-sm-6">
									    {!! Form::text('day', $reservation->day, ['class' => 'form-control', 'required' => 'required']) !!}
									    <small class="text-danger">{{ $errors->first('day') }}</small>
									</div>
								</div>
								<div class="form-group @if($errors->first('total')) has-error @endif">
								    {!! Form::label('total', 'Total Payment', ['class'=>'col-sm-3 control-label']) !!}
								    <div class="col-sm-6">
									    {!! Form::text('total', $reservation->total, ['class' => 'form-control', 'required' => 'required']) !!}
									    <small class="text-danger">{{ $errors->first('total') }}</small>
									</div>
								</div>
								@if ( $reservation->total == $sisabayar )
								<div class="form-group @if($errors->first('cash')) has-error @endif">
								    {!! Form::label('cash', 'Rest Pay', ['class'=>'col-sm-3 control-label']) !!}
								    <div class="col-sm-6">
									    {!! Form::text('cash', 'Lunas', ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly']) !!}
									    <small class="text-danger">{{ $errors->first('cash') }}</small>
									</div>
								</div>
									@else
								<div class="form-group @if($errors->first('cash')) has-error @endif">
								    {!! Form::label('cash', 'Rest Pay', ['class'=>'col-sm-3 control-label']) !!}
								    <div class="col-sm-6">
									    {!! Form::text('cash', $tagihan, ['class' => 'form-control', 'required' => 'required']) !!}
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
								    {!! Form::label('status', 'Occupancy Status',['class'=>'col-sm-3 control-label']) !!}
								    <div class="col-sm-6">
									    {!! Form::select('status', $status, null, ['id' => 'status', 'class' => 'form-control', 'required' => 'required',]) !!}
									    <small class="text-danger">{{ $errors->first('status') }}</small>
								    </div>
								</div>

							    <div class="btn-group pull-right col-sm-6">
							        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
							        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
							    </div>
								@endif
								
							</div>
							{!! Form::close() !!}
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