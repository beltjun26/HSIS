@extends('layouts.app')

@section('content')
	

	<div class="container" id="content">
		<div class="row">
			<div id="buttons-group">
				<a href="/librarian/create" type="button" class="btn btn-default">Borrow Books</a>
				<a href="/accountability/view_accountability" type="button" class="btn btn-default">View Accountabilities</a>
			</div>
		</div>
		<div class="row" id="table-div">
			<div class="col-md-12">
				<h3 style="margin-left: 15px; margin-top: 40px;">Borrowed Books</h3>
				<div class="panel panel-default">
					<div class="table table-hover table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Student Name</th>	
									<th>Book Borrowed</th>
									<th>Date Borrowed</th>
									<th>Return Date</th>
									<th>Status</th>
									<th>Edit</th>
								</tr>
							</thead>
							<tbody>
								@forelse($results as $result)
									<tr>
										<td><a href="#">{{ $result->first_name }} {{ $result->last_name }}</a></td>
										<td>{{ $result->book_id }}</td>
										<td>{{ $result->borrow_date }}</td>
										<td>{{ $result->return_date }}</td>
										<td>{{ $result->status }}</td>
										<td><a href="librarian/edit_borrowbook/{{$result->id}}">Edit</a></td>
									</tr>
								@empty
								@endforelse
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div>
			
		</div>
	</div>

@endsection