@extends('layouts.app')

@section('content')
	<script type= "text/javascript" href="{{ asset('js/jquery.js') }}"></script>
	<script type= "text/javascript" href="{{ asset('js/app.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/teacher/profile.css')}}">

	
	<div class="col-xs-offset-1 col-xs-11">
		<div class="co-xs-10 body_part">
			<div class="right_side">
				<div class="col-xs-4">
					<div>
						<img src="{{asset('images/profile.jpg')}}" id="profile">
					</div>
					<div class="panel panel-default" id = "details">
						<div class="panel-body">
							<dt>Full Name:</dt>
								<dd>{{ $teacher->nameOfUser() }}</dd>
							<dt>Age:</dt>
								<dd>{{ $teacher->bdate->age }} yrs. old</dd>
							<dt>Birthday</dt>
								<dd>{{ $teacher->bdate->format('j F Y') }}</dd>
							<dt>Address:</dt>
								<dd>{{ $teacher->typedUser()->address }}</dd>
							<dt>Email:</dt>
								<dd>{{ $teacher->typedUser()->email}}</dd>
							<dt>Position:</dt>
								<dd>{{ $teacher->typedUser()->position}}</dd>
							<dt></dt>
						</div>
						
					</div>
					
				</div>
				<div class="col-xs-8" id = "header">
						{{ csrf_field() }}
					<div>
						<h1><p>{{$teacher->username}}</p></h1>
						<h4>Grade 4 Maganda</h4>
						<h4>{{$teacher->typedUser()->position}}</h4>
					</div>
					<hr />
					<div class="panel panel-default"  id="stud_list">
						<div class="panel-heading">
							Class List
						</div>
						<div class="panel-body">
							<div class="table">
								<table>
									
									<tr>
										<div class="col-xs-12">
											<td class="col-xs-4">{{$sectionName}}</td>
											<td class="col-xs-5">{{$grade}}</td>
											<td class="col-xs-3"><a href="/student">More Info</a></td>
										</div>
									<tr>
									
										<div class="col-xs-12">
											<td class="col-xs-4">2. Biology</td>
											<td class="col-xs-5">3rd Yr. Rose</td>
											<td class="col-xs-3"><a>More Info</a></td>
										</div>
										
									</tr>
									<tr>
										<div class="col-xs-12">
											<td class="col-xs-4">3. Chemistry</td>
											<td class="col-xs-5">3rd Yr. Sampaguita</td>
											<td class="col-xs-3"><a>More Info</a></td>
										</div>
									</tr>
									<tr>
										<div class="col-xs-12">
											<td class="col-xs-4">4. Chemistry</td>
											<td class="col-xs-5">3rd Yr. Gumamela</td>
											<td class="col-xs-3"><a>More Info</a></td>
										</div>
									</tr>
									<tr>
										<div class="col-xs-12">
											<td class="col-xs-5">5. Calculus</td>
											<td class="col-xs-5">4th Yr. SSC</td>
											<td class="col-xs-3"><a>More Info</a></td>
										</div>
									</tr>
								</table>
							</div>
							
						</div>
						
					</div>
					
				</div>
			</div>
			
		</div>
	</div>
@endsection