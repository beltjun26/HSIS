@extends('layouts.app')

@section('content')
	
	<div class="right-parts">
		<div class="col-sm-12 header">
			<div class="title"><span class="glyphicon glyphicon-list-alt icons"></span>COLLECTION HISTORY</div><hr/>
		</div>

		<nav class="col-sm-12">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#all">All</a></li>
			    <li><a data-toggle="tab" href="#overdue">Overdue</a></li>
			    <li><a data-toggle="tab" href="#on_time">On time</a></li>
			    <li class="dropdown">
			    	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Category<span class="caret"></span></a>
			    	<ul class="dropdown-menu">
			    		<li><a href="#sports" data-toggle="tab">Sports</a></li>
			    		<li><a  href="#miscellaneous" data-toggle="tab">Miscellaneous</a></li>
			    		<li><a  href="#pta_fee" data-toggle="tab">PTA Fee</a></li>
			    	</ul>
			    </li>
			</ul>
		</nav>

		<div class="tab-content col-sm-12">
		    <div id="all" class="tab-pane fade in active">
			    <div class=" history-table panel panel-default">
					<table class="table table-hover table-bordered">
						<thead>
							<th class="text-center t-head" colspan="2">STUDENT NAME</th>
							<th class="text-center t-head">CATEGORY</th>
							<th class="text-center t-head">AMOUNT</th>
							<th class="text-center t-head">DUE DATE</th>
							<th class="text-center t-head">PAYMENT DATE</th>
							<th class="text-center t-head">STATUS</th>
							<th class="text-center t-head">OVERDUE DURATION</th>
						</thead>
						<?php $counter = 0; ?>
						@foreach($students as $student)
						<?php 
							$counter +=1;
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
							<td class="text-center">{{$student->amount}}</td>
							<td class="text-center">{{$student->due_date}}</td>
							<td class="text-center">{{$student->date}}</td>
							<td class="text-center">{{$student->status}}</td>
							<td class="text-center">{{$overdue}}</td>
						</tr>
						
						@endforeach
					</table>
				</div>
		   	</div>
		    <div id="overdue" class="tab-pane fade">
		    	<div class=" history-table panel panel-default">
					<table class="table table-hover table-bordered">
						<thead>
							<th class="text-center t-head" colspan="2">STUDENT NAME</th>
							<th class="text-center t-head">CATEGORY</th>
							<th class="text-center t-head">AMOUNT</th>
							<th class="text-center t-head">DUE DATE</th>
							<th class="text-center t-head">PAYMENT DATE</th>
							<th class="text-center t-head">STATUS</th>
							<th class="text-center t-head">OVERDUE DURATION</th>
						</thead>
						<?php $counter = 0; ?>
						@foreach($students as $student)
							<?php 
								$counter +=1;
								$overdue = ((strtotime(date("Y-m-d")) - strtotime($student->due_date))/86400);
								if($overdue<0){
									$overdue = "This is on time";
								}
								else{
									$overdue = $overdue . " days";
								}
							 ?>
						<tr>
							<td>{{$counter}}</td>
							<td class="text-center">{{$student->first_name}}</td>
							<td class="text-center">{{$student->accountability_name}}</td>
							<td class="text-center">{{$student->amount}}</td>
							<td class="text-center">{{$student->due_date}}</td>
							<td class="text-center">{{$student->date}}</td>
							<td class="text-center">{{$student->status}}</td>
							<td class="text-center" id = "over">{{$overdue}}</td>
						</tr>
						@endforeach
					</table>
				</div>
		   	</div>
		    <div id="on_time" class="tab-pane fade">
		      <div class=" history-table panel panel-default">
					<table class="table table-hover table-bordered">
						<thead>
							<th class="text-center t-head" colspan="2">STUDENT NAME</th>
							<th class="text-center t-head">CATEGORY</th>
							<th class="text-center t-head">AMOUNT</th>
							<th class="text-center t-head">DUE DATE</th>
							<th class="text-center t-head">PAYMENT DATE</th>
							<th class="text-center t-head">STATUS</th>
						</thead>
						<?php $counter = 0; ?>
						@foreach($studentOnTime as $studentOn)
							<?php 
								$counter +=1;
								$overdue = ((strtotime(date("Y-m-d")) - strtotime($studentOn->due_date))/86400);
								if($overdue<0){
									$overdue = "This is on time";
								}
								else{
									$overdue = $overdue . " days";
								}
							 ?>
						<tr>
							<td>{{$counter}}</td>
							<td class="text-center">{{$studentOn->first_name}}</td>
							<td class="text-center">{{$studentOn->accountability_name}}</td>
							<td class="text-center">{{$studentOn->amount}}</td>
							<td class="text-center">{{$studentOn->due_date}}</td>
							<td class="text-center">{{$studentOn->date}}</td>
							<td class="text-center">{{$studentOn->status}}</td>
							
						</tr>
						@endforeach
						
					</table>
				</div>
		    </div>
		    <div id="sports" class="tab-pane fade">
		      	<div class=" history-table panel panel-default">
					<table class="table table-hover table-bordered">
						<thead>
							<th class="text-center t-head" colspan="2">STUDENT NAME</th>
							<th class="text-center t-head">CATEGORY</th>
							<th class="text-center t-head">AMOUNT</th>
							<th class="text-center t-head">DUE DATE</th>
							<th class="text-center t-head">PAYMENT DATE</th>
							<th class="text-center t-head">STATUS</th>
							<th class="text-center t-head">OVERDUE DURATION</th>
						</thead>
						<?php $counter = 0; ?>
						@foreach($sports as $sport)
							<?php 
								$counter +=1;
								$overdue = ((strtotime(date("Y-m-d")) - strtotime($sport->due_date))/86400);
								if($overdue<0){
									$overdue = "This is on time";
								}
								else{
									$overdue = $overdue . " days";
								}
							 ?>
						<tr>
							<td>{{$counter}}</td>
							<td class="text-center">{{$sport->first_name}}</td>
							<td class="text-center">{{$sport->accountability_name}}</td>
							<td class="text-center">{{$sport->amount}}</td>
							<td class="text-center">{{$sport->due_date}}</td>
							<td class="text-center">{{$sport->date}}</td>
							<td class="text-center">{{$sport->status}}</td>
							<td class="text-center">{{$overdue}}</td>
						</tr>
						@endforeach
					</table>
				</div>
		    </div>
		    <div id="miscellaneous" class="tab-pane fade">
		      	<div class=" history-table panel panel-default">
					<table class="table table-hover table-bordered">
						<thead>
							<th class="text-center t-head" colspan="2">STUDENT NAME</th>
							<th class="text-center t-head">CATEGORY</th>
							<th class="text-center t-head">AMOUNT</th>
							<th class="text-center t-head">DUE DATE</th>
							<th class="text-center t-head">PAYMENT DATE</th>
							<th class="text-center t-head">STATUS</th>
							<th class="text-center t-head">OVERDUE DURATION</th>
						</thead>
						<?php $counter = 0; ?>
						@foreach($miscellaneous as $m)
							<?php 
								$counter +=1;
								$overdue = ((strtotime(date("Y-m-d")) - strtotime($m->due_date))/86400);
								if($overdue<0){
									$overdue = "This is on time";
								}
								else{
									$overdue = $overdue . " days";
								}
							 ?>
						<tr>
							<td>{{$counter}}</td>
							<td class="text-center">{{$m->first_name}}</td>
							<td class="text-center">{{$m->accountability_name}}</td>
							<td class="text-center">{{$m->amount}}</td>
							<td class="text-center">{{$m->due_date}}</td>
							<td class="text-center">{{$m->date}}</td>
							<td class="text-center">{{$m->status}}</td>
							<td class="text-center">{{$overdue}}</td>
						</tr>
						@endforeach
					</table>
				</div>
		    </div>
		    <div id="pta_fee" class="tab-pane fade">
		      	<div class=" history-table panel panel-default">
					<table class="table table-hover table-bordered">
						<thead>
							<th class="text-center t-head" colspan="2">STUDENT NAME</th>
							<th class="text-center t-head">CATEGORY</th>
							<th class="text-center t-head">AMOUNT</th>
							<th class="text-center t-head">DUE DATE</th>
							<th class="text-center t-head">PAYMENT DATE</th>
							<th class="text-center t-head">STATUS</th>
							<th class="text-center t-head">OVERDUE DURATION</th>
						</thead>
						<?php $counter = 0; ?>
						@foreach($pta as $p)
							<?php 
								$counter +=1;
								$overdue = ((strtotime(date("Y-m-d")) - strtotime($p->due_date))/86400);
								if($overdue<0){
									$overdue = "This is on time";
								}
								else{
									$overdue = $overdue . " days";
								}
							 ?>
						<tr>
							<td>{{$counter}}</td>
							<td class="text-center">{{$p->first_name}}</td>
							<td class="text-center">{{$p->accountability_name}}</td>
							<td class="text-center">{{$p->amount}}</td>
							<td class="text-center">{{$p->due_date}}</td>
							<td class="text-center">{{$p->date}}</td>
							<td class="text-center">{{$p->status}}</td>
							<td class="text-center">{{$overdue}}</td>
						</tr>
						@endforeach
					</table>
		    	</div>
		 	</div>
		</div>
	</div>

@endsection