@extends('layouts.app')
<script src="{{ asset('js/cashier/cashier.js') }}"></script>
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
						<tr>
							<td>1</td>
							<td class="text-center">Nemiada, Michelle</td>
							<td class="text-center">Sports Fee</td>
							<td class="text-center">Php 100.00</td>
							<td class="text-center">May 29, 2017</td>
							<td class="text-center">May 28, 2017</td>
							<td class="text-center">On time</td>
							<td class="text-center">--</td>
						</tr>
						<tr>
							<td>2</td>
							<td class="text-center">Amar, Chin-Chin</td>
							<td class="text-center">Sports Fee</td>
							<td class="text-center">Php 100.00</td>
							<td class="text-center">May 29, 2017</td>
							<td class="text-center">May 30, 2017</td>
							<td class="text-center">overdue</td>
							<td class="text-center">1 day</td>
						</tr>
						<tr>
							<td>3</td>
							<td class="text-center">Dela Cruz, Relyn</td>
							<td class="text-center">Laboratory Fee</td>
							<td class="text-center">Php 100.00</td>
							<td class="text-center">May 29, 2017</td>
							<td class="text-center">May 28, 2017</td>
							<td class="text-center">On time</td>
							<td class="text-center">--</td>
						</tr>
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
						<tr>
							<td>2</td>
							<td class="text-center">Amar, Chin-Chin</td>
							<td class="text-center">Sports Fee</td>
							<td class="text-center">Php 100.00</td>
							<td class="text-center">May 29, 2017</td>
							<td class="text-center">May 30, 2017</td>
							<td class="text-center">overdue</td>
							<td class="text-center">1 day</td>
						</tr>
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
							<th class="text-center t-head">OVERDUE DURATION</th>
						</thead>
						<tr>
							<td>1</td>
							<td class="text-center">Nemiada, Michelle</td>
							<td class="text-center">Sports Fee</td>
							<td class="text-center">Php 100.00</td>
							<td class="text-center">May 29, 2017</td>
							<td class="text-center">May 28, 2017</td>
							<td class="text-center">On time</td>
							<td class="text-center">--</td>
						</tr>
						<tr>
							<td>3</td>
							<td class="text-center">Dela Cruz, Relyn</td>
							<td class="text-center">Laboratory Fee</td>
							<td class="text-center">Php 100.00</td>
							<td class="text-center">May 29, 2017</td>
							<td class="text-center">May 28, 2017</td>
							<td class="text-center">On time</td>
							<td class="text-center">--</td>
						</tr>
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
						<tr>
							<td>1</td>
							<td class="text-center">Nemiada, Michelle</td>
							<td class="text-center">Sports Fee</td>
							<td class="text-center">Php 100.00</td>
							<td class="text-center">May 29, 2017</td>
							<td class="text-center">May 28, 2017</td>
							<td class="text-center">On time</td>
							<td class="text-center">--</td>
						</tr>
						<tr>
							<td>2</td>
							<td class="text-center">Amar, Chin-Chin</td>
							<td class="text-center">Sports Fee</td>
							<td class="text-center">Php 100.00</td>
							<td class="text-center">May 29, 2017</td>
							<td class="text-center">May 30, 2017</td>
							<td class="text-center">overdue</td>
							<td class="text-center">1 day</td>
						</tr>
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
						<tr>
							<td colspan="8" class="no_record">No records found</td>
						</tr>
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
						<tr>
							<td colspan="8" class="no_record">No records found</td>
						</tr>
					</table>
		    	</div>
		 	</div>
		</div>
	</div>

@endsection