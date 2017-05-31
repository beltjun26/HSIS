@extends('layouts.app')

@section('content')
<script type="text/javascript" src = "{{ asset('js/teacher/saveGrade.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/teacher/editGrade.css') }} " />
<div class="panel panel-default" id = "panel">
	<div class="panel-heading">
		<h2>Edit Grades</h2>
	</div>
	<div class="panel-body">
		<form action="/save/grades" method = "get">
			<table class = "table" id = "table">
				<?php 
					$index = 0;
				?>
				@foreach($students as $student)
					<?php $index++ ?>
					<tr>
						<td>
							{{$student->subject}}
						</td>
						<td>
							<input type="text" class = "text-center" name="sub.{{$index}}" value="{{$student->grade}}"/>
							<input type="hidden" name="subject.{{$index}}" value = "{{$student->subject}}">
						
						</td>
				
					</tr>
				@endforeach
		
		</table>
		<div id = "submition">
			<div>
				<label>Enter password for verification: 
				<input type="password" required = "" name="password" id = "password">
				<input type="hidden" name="sectionName" value="{{$sectionName}}">
			</label>
			
			</div>
			<button class="btn btn-success" >Save Changes </button>
			
		</div>
		
		
		</form>
	</div>
</div>
<!-- <div class="modal fade" id = "confirm_modal" role = "document">
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
				
			</div>
		</div>
	</div>	
</div>

 -->
@endsection