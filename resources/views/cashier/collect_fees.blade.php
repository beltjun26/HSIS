@extends('layouts.cashier_layout')

@section('content')

	<div class="right-parts">
		<div class="col-sm-12 header">
			<div class="title"><span class="glyphicon glyphicon-plus"></span>  FEES COLLECTION</div><hr/>
		</div>

		<div class="col-sm-8 col-sm-offset-2" id="search_student">
			<form method="post">
				<div class="input-group">
					<input type="text" list="students" name="student_name" placeholder="Enter student name . . . " class="form-control" required/>
					<span class="input-group-btn"><input type="button" class="btn btn-success" value="OK" id="get_student_info"/></span>
				</div>
				<datalist id="students">
					<option value="Nemiada, Michelle S."></option>
					<option value="Amar, Chin-Chin L."></option>
					<option value="Abisado, Rosiebelt Jun"></option>
					<option value="Dela Cruz, Relyn B."></option>
				</datalist>
			</form>
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
							<td rowspan="3" class="img-td"><img class="student-info-pic img-circle img-thumbnail" src="{{ asset('images/pic1.jpg') }}"></td>
							<td><label>Name: </label></td>
							<td>Rosiebelt Jun Abisado</td>
						</tr>
							<td><label>Grade: </label></td>
							<td>Grade 9</td>
						<tr>
							<td><label>Section: </label></td>
							<td>Maligaya</td>
						</tr>
					</table>
				</div>

				<div class="student-detail col-sm-12 panel panel-default">
					<table class="table">
						<tr>
							<th colspan="4" class="table-title">
								<span class="glyphicon glyphicon-exclamation-sign"></span>
								<span>  Unpaid Fees</span>
								<span class="pull-right text-primary">Php 450.00</span>
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
							<tr>
								<td class="text-center">Sports Fee</td>
								<td class="text-center">Php 150.00</td>
								<td class="text-center">May 29, 2017</td>
								<td class="text-center"><button class="btn btn-warning pay-now">pay now</button></td>
							</tr>
							<tr>
								<td class="text-center">Sports Fee</td>
								<td class="text-center">Php 150.00</td>
								<td class="text-center">May 29, 2017</td>
								<td class="text-center"><button class="btn btn-warning pay-now">pay now</button></td>
							</tr>
							<tr>
								<td class="text-center">Sports Fee</td>
								<td class="text-center">Php 150.00</td>
								<td class="text-center">May 29, 2017</td>
								<td class="text-center"><button class="btn btn-warning pay-now">pay now</button></td>
							</tr>
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
								<th class="text-center t-head">Payment Date</th>
							</tr>
							<tr>
								<td class="text-center">Sports Fee</td>
								<td class="text-center">Php 150.00</td>
								<td class="text-center">May 29, 2017</td>
							</tr>
							<tr>
								<td class="text-center">Sports Fee</td>
								<td class="text-center">Php 150.00</td>
								<td class="text-center">May 29, 2017</td>
							</tr>
							<tr>
								<td class="text-center">Sports Fee</td>
								<td class="text-center">Php 150.00</td>
								<td class="text-center">May 29, 2017</td>
							</tr>
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
			
		</div>


	</div>

@endsection