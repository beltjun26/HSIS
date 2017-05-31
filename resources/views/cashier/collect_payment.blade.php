@extends('layouts.app')

<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/cashier/cashier.js') }}"></script>
	<script src="{{ asset('js/cashier/collect_fees.js') }}"></script>
@section('content')

	<div class="right-parts">
		<div class="col-sm-12 header">
			<div class="title"><span class="glyphicon glyphicon-plus icons"></span>FEES COLLECTION</div><hr/>
		</div>

		<div id="payment" class="col-sm-8">
			<div class="col-sm-12">
				<div class="student-detail col-sm-12 panel panel-default">
					<table class="table">
						<tr>
							<th colspan="2" class="table-title">
								<span class="glyphicon glyphicon-user"></span>
								<span>Student Details</span>
							</th>
						</tr>
						<tr>
							<td rowspan="3" class="img-td"><img class="student-info-pic img-circle img-thumbnail" src="{{ asset('images/profile/1.jpg') }}"></td>
							<td><label>Name: </label></td>
							<td>
								{{ $student->last_name. ', ' .$student->first_name. ' '. $student->middle_name }}
							</td>
						</tr>
							<td><label>Grade: </label></td>
							<td>Grade 9</td>
						<tr>
							<td><label>Section: </label></td>
							<td>
							@if(!empty($student->hasStudentInfo->section_name))
								{{ $student->hasStudentInfo->section_name}}
							@else
								No section yet.
							@endif
							</td>
						</tr>
					</table>
				</div>

				<div class="student-detail col-sm-12 panel panel-default">
					<table class="table">
						<tr>
							<th colspan="4" class="table-title">
								<span class="glyphicon glyphicon-exclamation-sign"></span>
								<span>  Unpaid Fees</span>
								<span class="pull-right text-primary" id="total_acc">Php {{round($total, 2)}}</span>
							</th>
						</tr>
						<tr><td>
						<table class="table table-hover">
							<tr>
								<th class="text-center t-head">Category</th>
								<th class="text-center t-head">Amount</th>
								<th class="text-center t-head">Due</th>
								<th class="text-center t-head">Action</th>
							</tr>
							@if($student_unpaid->count()>0)
								@foreach($student_unpaid as $acc)
								<tr id="unpaid_{{$acc->id}}">
									<td class="text-center">{{$acc->accountability_name}}</td>
									<td class="text-center" id="amount_{{$acc->id}}">Php {{$acc->amount }}</td>
									<td class="text-center">{{ $acc->due_date }} </td>
									<td class="text-center"><button class="btn btn-warning pay-now" data-pg="{{$acc->id}}" id="pay_now">pay now</button></td>
								</tr>
								@endforeach
							@else
								<td class="text-center" colspan="4">No records found.</td>
							@endif
						</table>
						</td></tr>
					</table>
				</div>


				<div class="student-detail col-sm-12 panel panel-default">
					<table class="table">
						<tr>
							<th colspan="4" class="table-title">
								<span class="glyphicon glyphicon-time"></span>
								<span>   Payment History</span>
							</th>
						</tr>
						<tr><td>
						<table class="table table-hover">
							<tr>
								<th class="text-center t-head">Category</th>
								<th class="text-center t-head">Amount</th>
								<th class="text-center t-head">Due Date</th>
								<th class="text-center t-head">Payment Date</th>
								<th class="text-center t-head">Status</th>
							</tr>
							@if($student_paid->count()>0)
								@foreach($student_paid as $paid)
								<tr>
									<td class="text-center">{{$paid->accountability_name}}</td>
									<td class="text-center">Php  {{$paid->amount }}</td>
									<td class="text-center">{{ $paid->due_date }} </td>
									<td class="text-center">{{ $paid->date }} </td>
									<td class="text-center">{{ $paid->status }} </td>
								</tr>
								@endforeach
							@else
								<td class="text-center" colspan="3">No records found.</td>
							@endif
						</table>
						</td></tr>
					</table>
				</div>
			</div>
		</div>


		<div id="receipt" class="col-sm-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="text-center">RECEIPT</div>
				</div>
				<div class="panel-body col-sm-12">
					
						<div class="col-sm-12 pull-left">
							{{Carbon\Carbon::now()->setTimezone('Asia/Shanghai')->format('F j, Y h:i A')}}
						</div>
						<div class="pay-fee">							
							@if($student_unpaid->count()>0)
								@foreach($student_unpaid as $acc)
								<div class="col-sm-12 item" id="pay_{{$acc->id}}">
									<span class="col-sm-7">{{$acc->accountability_name}}</span>
									<span class="col-sm-4 amount" id="receiptAmount_{{$acc->id}}">Php {{$acc->amount }}</span>
									<span class="glyphicon glyphicon-remove text-danger remove" data-pg="{{$acc->id}}"></span>
								</div>
								@endforeach
							@else
								<div class="text-center col-sm-12">No accountability chosen.</div>
							@endif
							<div class="col-sm-12 total">
								<hr/>
								<span class="col-sm-6">Total</span>
								<span class="col-sm-6 total-amount" id="pay_amount_total">Php 0.00</span>
							</div>
						</div>
					</div>

					<div class="col-sm-12">
						<form method="get" action="/cashier/collect_now">
							<input type="hidden" name="paylist" value="" id="paylist"/>
							<button type="submit" class="btn btn-success btn-md pull-right" id="collect"><span class="glyphicon glyphicon-check"></span>  Collect Payment</button>
						</form>
					</div>
				</div>
			
		</div>


	</div>

@endsection