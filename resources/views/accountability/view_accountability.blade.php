@extends('layouts.app')

@section('content')
	<title>View Accountability</title>

	<div class="container" id="content">
		<div class="row">
			<div id="dynamic-content-name">
				<h3>Accountabilities</h3>
			</div>
			<a href="/accountability/add_accountability/{{ Auth::user()->id }}" type="button" class="btn btn-default" style="float: right;">Add Accountability</a>
			<div id="table-div">
				<div class="table table-hover table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Accountability</th>
								<th>Amount</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
							@forelse($accs as $acc)
							<tr>
								<td>{{$acc->accountability_name}}</td>
								<td>{{$acc->amount}}</td>
								<td><a href="/accountability/edit_accountability/{{ $acc->id }}">Edit</a></td>
							@empty
							</tr>
							@endforelse
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection