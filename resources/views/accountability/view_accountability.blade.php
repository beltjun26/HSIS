@extends('layouts.app')

@section('content')
	<title>View Accountability</title>

	<div class="container" id="content">
		<div class="row">
			<div id="buttons-group">
			<a href="/accountability/add_accountability/{{ Auth::user()->id }}" type="button" class="btn btn-success">Add Accountability</a>
			</div>
			<h3>Accountabilities</h3>
			<div id="table-div">
				<div class="table table-hover table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Student LRN</th>
								<th>Accountability</th>
								<th>Amount</th>
								<th>Options</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@forelse($accs as $acc)
								<tr>
									<td>{{$acc->scope}}</td>
									<td>{{$acc->accountability_name}}</td>
									<td>{{$acc->amount}}</td>
									<td><a href="#">Add Student</a></td>
									<td><a href="/accountability/edit_accountability/{{$acc->id}}">Edit</a></td>
								</tr>
							@empty
							@endforelse
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection