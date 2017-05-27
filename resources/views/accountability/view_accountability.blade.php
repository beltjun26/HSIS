@extends('layouts.app')

@section('content')
	<title>View Accountability</title>

	<div class="container" id="content">
		<div class="row">
			<div id="dynamic-content-name">
				<h3>Accountabilities</h3>
			</div>
			<a href="/accountability/add_accountability/{{}}" type="button" class="btn btn-default" style="float: right;">Add Accountability</a>
			<div id="table-div">
				<div class="table table-hover table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Accountability</th>
								<th>Settle With</th>
								<th>Status</th>
								<th>Date Added</th>
								<th>Edit</th>
							</tr>
						</thead>
						<tbody>
							@forelse($accs as $acc)
								<td>{{$acc->accountability_name}}</td>
								<td>{{$acc->type}}</td>
								<td>{{$acc->status}}</td>
								<td>{{$acc->date}}</td>
								<td><a href="/accountability/edit_accountability/{{$acc->type}}/{{$acc->id}}">Edit</a></td>
							@empty
							@endforelse
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection