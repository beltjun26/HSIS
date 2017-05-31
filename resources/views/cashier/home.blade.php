@extends('layouts.app')

@section('content')
	
    <script src="{{ asset('js/cashier/cashier.js') }}"></script>
	<div class="right-parts">
		<div class="col-sm-12 header">
			<div class="title"><span class="glyphicon glyphicon-eye-open icons"></span>COLLECTION OVERVIEW</div><hr/>
		</div>

		<div class="col-sm-12">
			<div class="top-boxes bg-1">
				<span class="info-content text-center pull-right">{{ count($accountabilities) }}</span>
				<span class="glyphicon glyphicon-book info-icon"></span><br/>
				<span class="info-title">Fees Category</span>
			</div>
			<div class="top-boxes bg-2">
				<span class="info-content text-center pull-right">
					@if(count($pays)>0)
						{{ round(count($pays->where('status', "unpaid"))/count($pays) * 100, 0) }} %

					@endif
				</span>
				<span class="glyphicon glyphicon-alert info-icon"></span><br/>
				<span class="info-title">Students with Unpaid Fees</span>
			</div>
			<div class="top-boxes bg-3">
				<span class="info-content text-center pull-right">
					@if(count($pays)>0)
						{{ round(count($pays->where('status', "overdue"))/count($pays) * 100, 0) }} %

					@endif
				</span>
				<span class="glyphicon glyphicon-hourglass info-icon"></span><br/>
				<span class="info-title">Students with overdue paymentss</span>
			</div>
			<div class="top-boxes bg-4">
				<span class="info-content text-center pull-right">20%</span>
				<span class="glyphicon glyphicon-ruble info-icon"></span><br/>
				<span class="info-title">Total Collected Fees</span>
			</div>
		</div>

		<div class="col-sm-12">
			<div class="col-sm-12">
				<div class="student-detail col-sm-12 panel panel-default">
					<table class="table">
						<tr class="text-primary">
							<th colspan="4" class="table-title">
								<span class="glyphicon glyphicon-book icons"></span>
								<span>Fees Category</span>
							</th>
						</tr>
						<tr><td>
						<table class="table table-hover">
							<tr>
								<th class="text-center t-head">Category</th>
								<th class="text-center t-head">Amount</th>
								<th class="text-center t-head">Due</th>
							</tr>
							@if(count($accountabilities)>0)
								@foreach($accountabilities as $acc)
								<tr>
									<td class="text-center">{{ $acc->accountability_name}}</td>
									<td class="text-center">Php {{ $acc->amount }}</td>
									<td class="text-center">{{ $acc->due_date }}</td>
								</tr>
								@endforeach
							@endif
						</table>
						</td></tr>
					</table>
				</div>


				<!-- <div class="student-detail col-sm-5 panel panel-default">
					<table class="table">
						<tr class="text-primary">
							<th colspan="4" class="table-title">
								<span class="glyphicon glyphicon-time icons"></span>
								<span>Collection Details</span>
							</th>
						</tr>
						<tr><td>
						<table class="table table-hover">
							<div class="category">Miscellaneous Fee</div>
							<div class="category">Sports Fee</div>
							<div class="category">PTA Fee</div>
						</table>
						</td></tr>
					</table>
				</div> -->
			</div>
		</div>


		<!-- <div class="col-sm-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="text-center">RECEIPT</div>
				</div>
				<div class="panel-body col-sm-12">
					
						<div class="col-sm-12 pull-left">
							May 17, 2017 9:30 A.M
						</div>
						<div class="pay-fee">
							<div class="col-sm-12 item">
								<span class="col-sm-7">Sports Fee</span>
								<span class="col-sm-4 amount">Php 100.00</span>
								<span class="glyphicon glyphicon-remove text-danger remove"></span>
							</div>
							<div class="col-sm-12 item">
								<span class="col-sm-7">Sports Fee</span>
								<span class="col-sm-4 amount">Php 100.00</span>
								<span class="glyphicon glyphicon-remove text-danger remove"></span>
							</div>
							<div class="col-sm-12 item">
								<span class="col-sm-7">Miscellaneous Fee</span>
								<span class="col-sm-4 amount">Php 100.00</span>
								<span class="glyphicon glyphicon-remove text-danger remove"></span>
							</div>
							<div class="col-sm-12 item">
								<span class="col-sm-7">Miscellaneous Fee</span>
								<span class="col-sm-4 amount">Php 100.00</span>
								<span class="glyphicon glyphicon-remove text-danger remove"></span>
							</div>
							<div class="col-sm-12 item">
								<span class="col-sm-7">Lab Fee</span>
								<span class="col-sm-4 amount">Php 100.00</span>
								<span class="glyphicon glyphicon-remove text-danger remove"></span>
							</div>
							<div class="col-sm-12 total">
								<span class="col-sm-6">Total</span>
								<span class="col-sm-6 total-amount">Php 0.00</span>
							</div>
						</div>
					</div>

					<div class="col-sm-12">
						<button class="btn btn-success btn-md pull-right" id="collect"><span class="glyphicon glyphicon-check"></span>  Collect Payment</button>
					</div>
				</div>
			
		</div> -->


	</div>

@endsection