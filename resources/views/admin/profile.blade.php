@extends('layouts.app')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/admin/profile.css') }}">
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-md-3 col-lg-3">
				<img src="{{ asset('images/profile/'.$admin->id.'.jpg') }}" id="profile">
				<input type="file" name="profilePicture" class="hidden">
			</div>
			<div class="col-sm-9 col-md-9 col-lg-9">
				<h1><p>{{ $admin->nameOfUser() }}</p></h1>
				<h4>{{ $admin->type }}</h4>
				<a href="/admin/profile/{{ $admin->username }}/edit" class="btn btn-default">Edit</a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="panel panel-default">
						<div class="panel-body">
							<dt>Full Name:</dt>
								<dd>{{ $admin->nameOfUser() }}</dd>
							<dt>Username:</dt>
								<dd>{{ $admin->username }}</dd>
							<dt>Age:</dt>
								<dd>{{ $admin->bdate->age }}</dd>
							<dt>Birthday</dt>
								<dd>{{ $admin->bdate->format('j F Y') }}</dd>
							<dt>Address:</dt>
								<dd>Seoul Korea</dd>
							<dt>Edu. Background:</dt>
								<dd>BS Elementary Education</dd>
								<dd>Major in Math</dd>
								<dd>Master Teacher VII</dd>
							<dt></dt>
						</div>
					</div>
			</div>
			<div class="col-sm-9 col-md-9 col-lg-9">
				<div class="panel panel-default">
					<div class="panel-heading">
						Student List
					</div>
					<div class="panel-body">
						<div class="table">
							<table>
								<tr>
									<div class="col-xs-12">
										<td class="col-xs-10"><h5 class="h5">1. Sky Canales</h5></td>
										<td class="col-xs-3"><a>More Info</a></td>
									</div>
								</tr>
								<tr>
									<div class="col-xs-12">
										<td class="col-xs-10"><h5>2. Aldren Zamora</h5></td>
										<td class="col-xs-3"><a>More Info</a></td>
									</div>
									
								</tr>
								<tr>
									<div class="col-xs-12">
										<td class="col-xs-10"><h5>3. Chili Nicolai Alarba</h5></td>
										<td class="col-xs-3"><a>More Info</a></td>
									</div>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>		
@endsection