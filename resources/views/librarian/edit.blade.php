@extends('layouts.app')

@section('content')
	
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 style="text-align: center">
				Edit this accountability
			</h2>
			<div class="panel panel-default" style="margin-top: 30px;">
				<div class="panel-body panel-default">
					<form action="/librarian/update_list/{{ $student->id }}" method="post">
						{{ csrf_field() }}
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									Student's LRN
								</div>
								<input class="form-control" name="student_LRN" value="{{ $student->student_LRN }}" />
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									Book ID
								</div>
								<input class="form-control" name="book_id" value="{{ $student->book_id }}" />
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									Date Borrowed
								</div>
								<input class="form-control" type="date" name="borrow_date" />
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									Return Date
								</div>
								<input class="form-control" type="date" name="borrow_date" />
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									Status
								</div>
								<select class="form-control" name="book_status">
									<option value="not_return">Not returned</option>
									<option value="return">Returned</option>
								</select>
							</div>
						</div>
						<input type="submit" class="btn btn-success pull-right" value="Submit" />
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection