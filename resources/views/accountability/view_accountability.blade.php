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
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection