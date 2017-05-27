@extends('layouts.app')

@section('content')
	<link rel="stylesheet" type="text/css" href="{{asset('css/student.css')}}">


	<div id="left_part">
		<img src="{{asset('images/profile/1.jpg')}}" id = "prof_pic">
	
		<div class=" panel panel-default" id = "stud_info">
			<div class="panel-heading">
				<h3>Student Information</h3>
			</div>
			<div class="panel-body">
				<dt>Fullname:</dt>
					<dd>full name here</dd>
				<dt>Address:</dt>
					<dd>Address here</dd>
				<dt>Birthdate:</dt>
					<dd>Birthdate here</dd>
				<dt>Age:</dt>
					<dd>Age here</dd>
				<dt>Gender:</dt>
					<dd>Gender here</dd>
				<dt>Mother's name:</dt>
					<dd>here</dd>
				<dt>Father's name:</dt>
					<dd>here</dd>
				<dt>Contact number:</dt>
					<dd>here</dd>
			</div>
		</div>
	</div>
	<div id = "right_part">
		<h2>Name of Student</h2>
		<h4>Section</h4>
		<h4>Grade</h4>
		<br>
		<hr />
		<div class="panel panel-default" id = "grades">
			<div class="panel-heading">
				<h3>Grades</h3>
			</div>
			<div class="panel-body">
				<div>Lorem ipsum</div>
			</div>
			
		</div>
	</div>


@endsection