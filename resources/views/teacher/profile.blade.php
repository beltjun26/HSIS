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
						<img src="{{asset('images/profile/1.jpg')}}" id="profile">
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
						<h1><p>{{$teacher->nameOfUser()}}</p></h1>
						<h4>{{$teacher->typedUser()->position}}</h4>
					</div>
					<hr />
					<div class="panel panel-default"  id="stud_list">
						<div class="panel-heading">
							Section List
						</div>
						<div class="panel-body">
							<div class="table">
								<table>
								@foreach($section as $sections)
									<tr>
										<div class="col-xs-12">
											<td class="col-xs-4"><a href="/teacher/class/{{$sections->name}}">{{$sections->name}}</a></td>
											<td class="col-xs-5">{{$sections->grade_id}}</td>
											<td class="col-xs-3"><a href="/teacher/classRecord/{{$sections->name}}">See Class Record</a></td>
										</div>
									</tr>
								@endforeach
								</table>
							</div>
							
						</div>
						
					</div>
					
				</div>
			</div>
			
		</div>
	</div>
@endsection