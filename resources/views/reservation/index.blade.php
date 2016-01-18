@extends('layouts.form')
@section('content')
	<section role="main" class="content-body">
		<header class="page-header">
			<h2>Form Wizard</h2>
		
			<div class="right-wrapper pull-right">
				<ol class="breadcrumbs">
					<li>
						<a href="index.html">
							<i class="fa fa-home"></i>
						</a>
					</li>
					<li><span>Forms</span></li>
					<li><span>Wizard</span></li>
				</ol>
		
				<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
			</div>
		</header>

		<!-- start: page -->
			<div class="row">
				<div class="col-xs-12">
					<section class="panel form-wizard" id="w4">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="fa fa-caret-down"></a>
								<a href="#" class="fa fa-times"></a>
							</div>
			
							<h2 class="panel-title">Form Wizard</h2>
						</header>
						<div class="panel-body">
							<div class="wizard-progress wizard-progress-lg">
								<div class="steps-progress">
									<div class="progress-indicator"></div>
								</div>
								<ul class="wizard-steps">
									<li class="active">
										<a href="#w4-account" data-toggle="tab"><span>1</span>Customer Info</a>
									</li>
									<li>
										<a href="#w4-roomtype" data-toggle="tab"><span>2</span>Room Type Info</a>
									</li>
									<li>
										<a href="#w4-confirm" data-toggle="tab"><span>3</span>Occupancy Info</a>
									</li>
								</ul>
							</div>
							{!! Form::open(['method' => 'POST', 'url' => '/admin/pesan/', 'class' => 'form-horizontal', 'novalidate'=>'novalidate']) !!}
							
								<div class="tab-content">
									<div id="w4-account" class="tab-pane active">

										<div class="form-group @if($errors->first('kode')) has-error @endif">
										    {!! Form::label('kode', 'Kode', ['class'=>'col-sm-3 control-label']) !!}
										    <div class="col-sm-9">
											    {!! Form::text('kode', $kode, ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly']) !!}
											    <small class="text-danger">{{ $errors->first('kode') }}</small>
											</div>
										</div>

										<div class="form-group @if($errors->first('nama_depan')) has-error @endif">
										    {!! Form::label('nama_depan', 'First Name', ['class'=>'col-sm-3 control-label']) !!}
										    <div class="col-sm-9">
											    {!! Form::text('nama_depan', null, ['class' => 'form-control', 'required' => 'required']) !!}
											    <small class="text-danger">{{ $errors->first('nama_depan') }}</small>
											</div>
										</div>

										<div class="form-group @if($errors->first('nama_belakang')) has-error @endif">
										    {!! Form::label('nama_belakang', 'Last Name', ['class'=>'col-sm-3 control-label']) !!}
										    <div class="col-sm-9">
											    {!! Form::text('nama_belakang', null, ['class' => 'form-control', 'required' => 'required']) !!}
											    <small class="text-danger">{{ $errors->first('nama_belakang') }}</small>
											</div>
										</div>

										<div class="form-group @if($errors->first('email')) has-error @endif">
										    {!! Form::label('email', 'Email', ['class'=>'col-sm-3 control-label']) !!}
										    <div class="col-sm-9">
											    {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
											    <small class="text-danger">{{ $errors->first('email') }}</small>
											</div>
										</div>

										<div class="form-group @if($errors->first('phone')) has-error @endif">
										    {!! Form::label('phone', 'Phone', ['class'=>'col-sm-3 control-label']) !!}
										    <div class="col-sm-9">
											    {!! Form::text('phone', null, ['class' => 'form-control', 'required' => 'required']) !!}
											    <small class="text-danger">{{ $errors->first('phone') }}</small>
											</div>
										</div>
									</div>
									<div id="w4-roomtype" class="tab-pane">
										<div class="form-group @if($errors->first('roomtype_kode')) has-error @endif">
										    {!! Form::label('roomtype_kode', 'Room Code',['class'=>'col-sm-3 control-label']) !!}
										    <div class="col-sm-9">
											    {!! Form::select('roomtype_kode', $roomtype, null, ['id' => 'roomtype_kode', 'class' => 'form-control', 'required' => 'required',]) !!}
											    <small class="text-danger">{{ $errors->first('roomtype_kode') }}</small>
										    </div>
										</div>
										
										<div class="form-group @if($errors->first('extrabed')) has-error @endif">
										    {!! Form::label('extrabed', 'Extrabed', ['class'=>'col-sm-3 control-label']) !!}
										    <div class="col-sm-9">
											    {!! Form::text('extrabed', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>$placeholder]) !!}
											    <small class="text-danger">{{ $errors->first('extrabed') }}</small>
											</div>
										</div>

									</div>
									<div id="w4-confirm" class="tab-pane">
										
										<div class="form-group">
											<label class="col-md-3 control-label">Check-In</label>
											<div class="col-md-9">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</span>
													<input type="text" name="checkin" data-plugin-datepicker="" class="form-control" required='' data-date-format="yyyy-mm-dd">
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Check-Out</label>
											<div class="col-md-9">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</span>
													<input type="text" name="checkout" data-plugin-datepicker="" class="form-control"  required='' data-date-format="yyyy-mm-dd">
												</div>
											</div>
										</div>

										<div class="form-group @if($errors->first('day')) has-error @endif">
										    {!! Form::label('day', 'Day(s)', ['class'=>'col-sm-3 control-label']) !!}
										    <div class="col-sm-9">
											    {!! Form::text('day', null, ['class' => 'form-control', 'required' => 'required']) !!}
											    <small class="text-danger">{{ $errors->first('day') }}</small>
											</div>
										</div>
									</div>
								</div>
						</div>
						<div class="panel-footer">
							<ul class="pager">
								<li class="previous disabled">
									<a><i class="fa fa-angle-left"></i> Previous</a>
								</li>
								<li class="finish hidden pull-right">
									{!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
								</li>
								<li class="next">
									<a>Next <i class="fa fa-angle-right"></i></a>
								</li>
							</ul>
						</div>							
							{!! Form::close() !!}
					</section>
				</div>
			</div>
		<!-- end: page -->
	</section>
@stop