@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">
				<div class="page-header text-center">
					<h3>Edit Profile</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
				<div class="row">
					<div class="col-sm-12 col-md-12 text-center">
						<h4>Admin</h4>
					</div>
				</div>
				<form id="admin">
					<div class="form-group">
						<label>Username:</label>
						<input class="form-control" type="text" name="username" value="{{ $user->username }}">
					</div>
					<div class="form-group">
						<label>Firstname:</label>
						<input class="form-control" type="text" name="firstname" value="{{ $user->firstname }}">
					</div>
					<div class="form-group">
						<label>Lastname:</label>
						<input class="form-control" type="text" name="lastname" value="{{ $user->lastname }}">
					</div>
					<div class="form-group">
						<label>Birthday:</label>
						<input class="form-control" type="date" name="bdate"
						value="{{ $user->bdate->format('Y-m-d') }}">
					</div>
					<div class="form-group">
						<label>Password:</label>
						<input class="form-control" type="password" name="">
					</div>
					<div class="form-group">
						<label>Retype Password</label>
						<input class="form-control" type="password" name="">
					</div>
					<div class="form-group text-center">
						<input class="btn btn-success" type="submmit" name="submit" value="Edit">
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection