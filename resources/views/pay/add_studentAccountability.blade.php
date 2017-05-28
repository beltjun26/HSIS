@extends('layouts.app')

@section('content')
	
	@forelse($details as $detail)

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 style="text-align: center">
				Add student to {{$detail->accountability_name}}
			</h2>
			<div class="panel panel-default" style="margin-top: 30px;">
				<div class="panel-body panel-default">
					<form action="/pay/addStudentAccountability" method="post">
						{{ csrf_field() }}
						<input type="hidden" name="acc_id" value="{{ $detail->id }}">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									Student's LRN
								</div>
								<input class="form-control" name="student_LRN" />
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									Due Date
								</div>
								<input class="form-control" type="date" name="due_date" />
							</div>
						</div>
						<input type="submit" class="btn btn-success pull-right" value="Submit" />
					</form>
				</div>
			</div>
		</div>
	</div>

	@empty

	@endforelse

@endsection