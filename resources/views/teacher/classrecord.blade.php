@extends('layouts.app')

@section('content')
	<script type= "text/javascript" href="{{ asset('js/jquery.js') }}"></script>
	<script type= "text/javascript" href="{{ asset('js/app.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/teacher/classrecord.css')}}">

<div class="panel panel-default record">
	<div class="panel-body">
		<div class="class_name">{{$section}}</div>
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
				</tr>
				<tr>
					<td>{{$student->fullname()}}</td>
					<td><input type="text"  class = "input text-center" name=""></td>
					<td><input type="text"  class = "input text-center" name=""></td>
					<td><input type="text"  class = "input text-center" name=""></td>
					<td><input type="text"  class = "input text-center" name=""></td>
					<td><input type="text"  class = "input text-center" name=""></td>
					<td><input type="text"  class = "input text-center" name=""></td>

				</tr>
				<tr>
					<td>Nicole Pein</td>
					<td><input type="text"  class = "input text-center" name=""></td>
					<td><input type="text"  class = "input text-center" name=""></td>
					<td><input type="text"  class = "input text-center" name=""></td>
					<td><input type="text"  class = "input text-center" name=""></td>
					<td><input type="text"  class = "input text-center" name=""></td>
					<td><input type="text"  class = "input text-center" name=""></td>

				</tr>
				<tr>
					<td>Michelle Nemiada</td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>

				</tr>
				<tr>
					<td>Jing Talabucon</td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>


				</tr>
				<tr>
					<td>Allyn Calcaben</td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>

				</tr>
				<tr>
					<td>Relyn Dela Cruz</td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>

				</tr>
				<tr>
					<td>Jessa Palquiran</td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>

				</tr>
				<tr>
					<td>Rosiebelt Abisado</td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>

				</tr>
				<tr>
					<td>Justine Nam-ay</td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>

				</tr>
				<tr>
					<td>August Zion</td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>
					<td><input type="text" class = "input text-center" name=""></td>

				</tr>

			</table>
			<button class="btn btn-success save" data-toggle = "modal" data-target = "#confirm_modal">Save Changes</button>
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