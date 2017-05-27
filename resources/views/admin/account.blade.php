@extends('layouts.app')
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>	
<script type="text/javascript" src="{{ asset('js/admin/account.js') }}"></script>

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-lg-6 col-md-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading"	>
					Accounts
				</div>
				<div class="panel-body">
					<div class="btn-group btn-group-justified">
						<a id="admin" href="#" class="btn btn-default active"><span class="glyphicon glyphicon-wrench"></span> Admin</a>
						<a id="teacher" href="#" class="btn btn-default"><span class="glyphicon glyphicon-education"></span> Teacher</a>
						<a id="librarian" href="#" class="btn btn-default"><span class="glyphicon glyphicon-book"></span> Librarian</a>
						<a id="cashier" href="#" class="btn btn-default"><span class="glyphicon glyphicon-usd"></span> Cashier</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8 col-lg-8 col-md-8 col-sm-offset-2 col-lg-offset-2 col-md-offset-2">
			<table name="admin" id="table" class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Username</th>
						<th>Name</th>
						<th>Birthday</th>
						<th>Gender</th>
					</tr>
				</thead>
				<tbody>
				@forelse($admins as $admin)
					<tr>
						<td>{{ $admin->user_id }}</td>
						<td>{{ $admin->logininfo->username}}</td>
						<td>{{ $admin->logininfo->nameOfUser() }}</td>
						<td>{{ $admin->logininfo->bdate->format('l j F Y') }}</td>
						<td>{{ $admin->logininfo->gender }}</td>
					</tr>
				@empty
					<p class="text-danger text-center">No Data in Database</p>
				@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection	