@extends('layouts.app')

@section('content')
	<script type= "text/javascript" href="{{ asset('js/jquery.js') }}"></script>
	<script type= "text/javascript" href="{{ asset('js/app.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/teacher/classrecord.css')}}">

<div class="panel panel-default record">
	<div class="panel-body">
		<div class="class_name">{{$grade_section->name}}</div>
		<div class="table-responsive">
			<table class="table">	
				<colgroup></colgroup>
				<colgroup class="bg-success"></colgroup>
				<colgroup></colgroup>
				<colgroup class="bg-success"></colgroup>
				<colgroup></colgroup>
				<colgroup class="bg-success"></colgroup>
				<tr>
					<th>Name</th>
					<th class="text-center">GMRC</th>
					<th class="text-center">Math</th>
					<th class="text-center">English</th>
					<th class="text-center">Aral-Pan</th>
					<th class="text-center">Science</th>
					<th class="text-center">Average</th>
					<th class= "text-center">Actions</th>
				</tr>
				@forelse($students as $student)
				<tr>
					<td>{{ $student->first_name }}</td>
					<td class="text-center">{{$student->grade}}</td>
					<td class="text-center"></td>
					<td class="text-center"></td>
					<td class="text-center"></td>
					<td class="text-center"></td>
					<td class="text-center"></td>
					<td class="text-center"><a href = "/profile/classRecord/{{$grade_section->name}}/{{$student->LRN}}"><button class="btn btn-primary" >Edit Grades </button></a></td>
				</tr>
				@empty
					No Data
				@endforelse
			</table>
			<button class="btn btn-success save" data-toggle = "modal" data-target = "#confirm_modal">Save Changes </button>
		</div>
	</div>
	
</div>
<div class="modal fade" id = "confirm_modal" role = "document">
	<div class="modal-content">
		<div class="modal-dialog">
			<div class="modal-header">
				<button data-dismiss = "modal" class="close">&times;</button>
			</div>
			<div class="modal-body">
				<div>Please verify your identity:</div>
				<div class="input-group" id = "password">
					<div  class="input-group-btn">
						<button class="btn btn-default "><span>Password </span></button>
					</div>
					<input type="text" name="" class="form-control">
				</div>
				<button class = "btn btn-success" href = "#" id = "confirm" data-dismiss = "modal">Confirm</button>
			</div>
		</div>
	</div>	
</div>













@endsection