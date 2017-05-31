@extends('layouts.app')

@section('content')
<script type="text/javascript" src = "{{ asset('js/teacher/saveGrade.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/teacher/editGrade.css') }} " />
<div class="panel panel-default" id = "panel">
	<div class="panel-heading">
		<h2>Edit Grades of {{$LRN}}</h2>
	</div>
	<div class="panel-body">
		<form action="" method = "post" id = "grade_form">
			<table class = "table" id = "table">
				@foreach($students as $student)
					<tr>
						<td>
							{{$student->subject}}
						</td>
						<td>
							<input type="text" class = "text-center" name="{{$student->subject}}" value="{{$student->grade}}"/>
						</td>
				
					</tr>
				@endforeach

		</table>
			<input type="submit" id = "submit" name="submit">
		</form>
		
		
	</div>
</div>

@endsection