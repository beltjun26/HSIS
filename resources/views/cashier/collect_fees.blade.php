@extends('layouts.app')

@section('content')

	<div class="right-parts">
		<div class="col-sm-12 header">
			<div class="title"><span class="glyphicon glyphicon-plus icons"></span>FEES COLLECTION</div><hr/>
		</div>

		<div class="col-sm-8 col-sm-offset-2" id="search_student">
			<form method="get" id="student_info_pay" action="/cashier/collect_payment">
				<div class="input-group">
					<input type="text" list="students" name="student_name" placeholder="Enter student name . . . " class="form-control" required autocomplete="off" id="student_name"/>
						<datalist id="students">
							@foreach($students as $student)
								<option value="{{ $student->last_name. ', ' .$student->first_name. ' '. $student->middle_name[0]. '. ('.$student->LRN . ')'}}"></option>
							@endforeach
						</datalist>
					<span class="input-group-btn"><input type="submit" class="btn btn-success" value="OK" id="get_student_info"/></span>
				</div>
			</form>
		</div>

		


	</div>
<script src="{{ asset('js/cashier/collect_fees.js') }}"></script>

@endsection