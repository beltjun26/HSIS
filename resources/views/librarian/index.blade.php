@extends('layouts.app')

@section('content')
	

	<div class="container" id="content">
		<div class="row">
			<p id="type">This is your Homepage.</p>
		</div>
		<div class="row">
			<div id="buttons-group">
				<a href="/librarian/create" type="button" class="btn btn-default">Borrow Books</a>
				<a type="button" class="btn btn-default" href="add_accountability">Add Accountabilities</a>
			</div>
		</div>
		<div class="row" id="table-div">
			<div class="col-md-12">
				<div class="table table-hover table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Student Name</th>	
								<th>Book Borrowed</th>
								<th>Date Borrowed</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							@foreach($results as $result)
								<tr>
									<td><a href="#">{{ $result->first_name }} {{ $result->last_name }}</a></td>
									<td>{{ $result->book_id }}</td>
									<td>{{ $result->date }}</td>
									<td>{{ $result->status }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<div class="table table-hover table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Student Name</th>	
								<th>Book Borrowed</th>
								<th>Date Borrowed</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							@foreach($accs as $acc)
								<tr>
									<td><a href="#">{{ $acc->user_id }}</a></td>
									<td>{{ $acc->id }}</td>
									<td>{{ $acc->date }}</td>
									<td>{{ $acc->type }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div>
			
		</div>
	</div>

@endsection