@extends('layouts.app')

@section('content')

	<div class="right-parts">
		<div class="col-sm-12 header">
			<div class="title"><span class="glyphicon glyphicon-exclamation-sign icons"></span>Students with Overdue Unpaid Fees</div><hr/>
		</div>

		<div class="col-sm-12">
		    <div class=" history-table panel panel-default">
				<table class="table table-hover table-bordered">
					<thead>
						<th class="text-center t-head" colspan="2">STUDENT NAME</th>
						<th class="text-center t-head">CATEGORY</th>
						<th class="text-center t-head">AMOUNT</th>
						<th class="text-center t-head">DUE DATE</th>
						<th class="text-center t-head">OVERDUE DURATION</th>
					</thead>
					<tr>
						<td>1</td>
						<td class="text-center">Nemiada, Michelle</td>
						<td class="text-center">Sports Fee</td>
						<td class="text-center">Php 100.00</td>
						<td class="text-center">May 29, 2017</td>
						<td class="text-center">2 days</td>
					</tr>
					<tr>
						<td>2</td>
						<td class="text-center">Amar, Chin-Chin</td>
						<td class="text-center">Sports Fee</td>
						<td class="text-center">Php 100.00</td>
						<td class="text-center">May 29, 2017</td>
						<td class="text-center">1 day</td>
					</tr>
					<tr>
						<td>3</td>
						<td class="text-center">Dela Cruz, Relyn</td>
						<td class="text-center">Laboratory Fee</td>
						<td class="text-center">Php 100.00</td>
						<td class="text-center">May 29, 2017</td>
						<td class="text-center">1 days</td>
					</tr>
				</table>
			</div>
		</div>
	</div>

@endsection