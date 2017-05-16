@extends('layouts.app')

@section('content')
	<script type= "text/javascript" href="{{ asset('js/jquery.js') }}"></script>
	<script type= "text/javascript" href="{{ asset('js/app.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/schedule.css')}}">
	<!-- <script type="text/javascript" src = " {{ asset('js/bootstrap.min.js') }}"></script> -->
	<!-- <link rel="stylesheet" href="{{ asset('css/search_style.css') }}"> -->

	<div class="col-xs-offset-3 col-xs-10">
		<!-- <nav class = "navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a href="#" class="navbar-brand">HSIS</a>
				</div>	
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="#">Home</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Schedule</a></li>
						<li><a href="#">Classes</a></li>
						<li><a href="#">Profile</a></li>
						<li><a href="#logoutmodal"  data-target =data-toggle="modal"><span class="glyphicon glyphicon-off text-danger"></span></a></li>
					</ul>
					<form class="navbar-form navbar-right">
						<div class="input-group">
							<input type="text" name="keyword" class="form-control" placeholder="Search..." />
							<div class="input-group-btn">
								<button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
							</div>
						</div>
					</form>
				</div>
			</div>		
		</nav> -->
		<div class="row actual-container">
			<div class="col-sm-10">
				<h1>Schedule</h1>
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table">
								<colgroup></colgroup>
								<colgroup class="bg-success"></colgroup>
								<colgroup></colgroup>
								<colgroup class="bg-success"></colgroup>
								<colgroup></colgroup>
								<colgroup class="bg-success"></colgroup>
								<tr>
									<th></th>
									<th class="text-center">Monday</th>
									<th class="text-center">Teusday</th>
									<th class="text-center">Wednesday</th>
									<th class="text-center">Thursday</th>
									<th class="text-center">Friday</th>
								</tr>
								<tr>
									<td>7:30-8:30</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>8:30-9:30</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>9:30-10:30</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>10:30-11:30</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>11:30-12:30</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>12:30-1:30</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>1:30-2:30</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>2:30-3:30</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>3:30-4:30</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>4:30-5:30</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>

	<div class="modal fade" id="logoutmodal" role="document">
		<div class="modal-content">
			<div class="modal-dialog">
				<div class="modal-header">
					<a class="close" href="#" data-dismiss="modal">&times;</a>
				</div>
				<div class="modal-body">
					<h2>Are you sure to logout?</h2>
					<a href="#">Yes</a>
					<a href="#" data-dismiss="modal">No</a>
				</div>
			</div>
		</div>
	</div>


@endsection