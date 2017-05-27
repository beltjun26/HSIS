@extends('layouts.app')

@section('content')
	
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 style="text-align: center">
				Add book to borrowed books list
			</h2>
			<div class="panel panel-default" style="margin-top: 30px;">
				<div class="panel-body panel-default">
					<form action="/librarian/addBookAccountability" method="post">
						{{ csrf_field() }}
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
									Book ID
								</div>
								<input class="form-control" name="book_id" />
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									Date
								</div>
								<input class="form-control" type="date" name="borrow_date" />
							</div>
						</div>
						<input type="submit" class="btn btn-success pull-right" value="Submit" />
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection