@extends('layouts.app')

@section('content')
	<script type= "text/javascript" href="{{ asset('js/jquery.js') }}"></script>
	<script type= "text/javascript" href="{{ asset('js/app.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/profile(teacher).css')}}">

	
	<div class="col-xs-offset-3 col-xs-9">
		<div class="co-xs-10 body_part">
			<div class="right_side">
				<div class="col-xs-3">
					<div>
						<img src="{{asset('images/profile.jpg')}}" id="profile">
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<dt>Full Name:</dt>
								<dd>{{ $teacher->username }}</dd>
							<dt>Age:</dt>
								<dd>24 yrs. old</dd>
							<dt>Birthday</dt>
								<dd>January 22, 1998</dd>
							<dt>Address:</dt>
								<dd>Seoul Korea</dd>
							<dt>Edu. Background:</dt>
								<dd>BS Elementary Education</dd>
								<dd>Major in Math</dd>
								<dd>Master Teacher VII</dd>
							<dt></dt>
						</div>
						
					</div>
					
				</div>
				<div class="col-xs-8">
						{{ csrf_field() }}
					<div>
						<h1><p>{{Auth::user()->username}}</p></h1>
						<h4>Grade 4 Maganda</h4>
						<button class="btn btn-default"><a href= "">View schedule</a></button>
					</div>
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
											<td class="col-xs-3"><a>More Info</a></td>
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