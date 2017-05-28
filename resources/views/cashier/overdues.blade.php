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
					<?php $counter = 0; ?>

					@foreach($students as $student)
					<?php 
							$counter += 1;
							$overdue = ((strtotime(date("Y-m-d")) - strtotime($student->due_date))/86400);
							if($overdue<0){
								$overdue = "--";
							}
							else{
								$overdue = $overdue . " days";
							}
					?>
					<tr>
						<td>{{$counter}}</td>
						<td class="text-center">{{$student->first_name}}</td>
						<td class="text-center">{{$student->accountability_name}}</td>
						<td class="text-center">{{$student->LRN}}</td>
						<td class="text-center">{{$student->due_date}}</td>
						<td class="text-center">{{$overdue}}</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>

@endsection