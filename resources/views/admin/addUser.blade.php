@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{{ asset('css/admin/addUser.css') }}">
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/addUser.js') }}"></script>
@section('content')
	 <div class="container">
		  <div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="page-header">
					<h3 class="text-center">ADD USER</h3>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						Choose User
					</div>
					<div class="pane-body user-group">
						<div class="row text-center">
							<div class="col-md-3 col-sm-3">
								<button id="adminBtn" class="btn btn-default" type="button" name="admin">Admin</button>
							</div>
							<div class="col-md-3 col-sm-3">
								<button id="teacherBtn" class="btn btn-default" type="button" name="teacher">Teacher</button>
							</div>
							<div class="col-md-3 col-sm-3">
								<button id="cashierBtn" class="btn btn-default" type="button" name="cashier">Cashier</button>
							</div>
							<div class="col-md-3 col-sm-3">
								<button id="librarianBtn" class="btn btn-default" type="button" name="librarian">Librarian</button>
							</div>
						</div>
					</div>
				</div>
				<hr/>
			</div>
		  </div>
		  <div id="successModal" class="modal fade">
				<div class="modal-dialog">
					 <div class="modal-content v-center">
						  <div class="modal-body text-center text-success">
								User Successfully Addded
						  </div>
					 </div>
				</div>
		  </div>
		  <div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div id="form" class="panel panel-success">
					<div class="panel-heading">
						Create Admin
					</div>
					<div id="form_container" class="panel-body">

						<form id="adminForm" class="form-horizontal" method="POST" action="/registerUser">
									 {{ csrf_field() }}
							<div class="form-group">
								<label class="control-label col-sm-2" for="username">Username:</label>
								<div class="col-sm-10">
									<input class="form-control" type="text" name="username">	
								</div>
							</div>

							<div class="form-group">
								  <label class="control-label col-sm-2" for="name">First Name:</label>
								  <div class="col-sm-10">
										<input class="form-control" type="text" name="firstname">  
								  </div>
							</div>
							<div class="form-group">
								  <label class="control-label col-sm-2" for="lastname">Last Name:</label>
								  <div class="col-sm-10">
										<input class="form-control" type="text" name="lastname">  
								  </div>
							</div>
							<div class="form-group">
								  <label class="control-label col-sm-2" for="lastname">Birthday:</label>
								  <div class="col-sm-10">
										<input class="form-control" type="date" name="bdate">  
								  </div>
							</div>
							<div class="form-group">
								  <label class="control-label col-sm-2" for="lastname">Gender:</label>
								  <div class="col-sm-10">
										<label><input type="radio" name="gender" value="male">Male</label>
										<label><input type="radio" name="gender" value="female">Female</label>
								  </div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">Password:</label>
								<div class="col-sm-10">
									<input class="form-control" type="password" name="password">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2">Retype Password:</label>
								<div class="col-sm-10">
									<input class="form-control" type="password" name="password_confirmation">	
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-2 col-sm-offset-5 text-center">
									<input class="btn btn-success" type="submit" name="submit">
								</div>
							</div>
									 <input type="hidden" name="type" value="admin">
						</form>

						<form id="teacherForm" class="form-horizontal" method="POST" action="/registerUser">
									 {{ csrf_field() }}
							<div class="form-group">
								<label class="control-label col-sm-2" for="username">Username:</label>
								<div class="col-sm-10">
									<input class="form-control" type="text" name="username">	
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2">Password:</label>
								<div class="col-sm-10">
									<input class="form-control" type="password" name="password">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2">Retype Password:</label>
								<div class="col-sm-10">
									<input class="form-control" type="password" name="password_confirmation">	
								</div>
							</div>

							<div class="form-group">
								  <label class="control-label col-sm-2" for="name">First Name:</label>
								  <div class="col-sm-10">
										<input class="form-control" type="text" name="firstname">  
								  </div>
							</div>
							<div class="form-group">
								  <label class="control-label col-sm-2" for="lastname">Last Name:</label>
								  <div class="col-sm-10">
										<input class="form-control" type="text" name="lastname">  
								  </div>
							</div>
							<div class="form-group">
								  <label class="control-label col-sm-2" for="email">Email:  </label>
								  <div class="col-sm-10">
										<input class="form-control" type="email" name="email">  
								  </div>
							</div>
							<div class="form-group">
								  <label class="control-label col-sm-2" for="lastname">Birthday:</label>
								  <div class="col-sm-10">
										<input class="form-control" type="date" name="bdate">  
								  </div>
							</div>
							<div class="form-group">
								  <label class="control-label col-sm-2" for="lastname">Gender:</label>
								  <div class="col-sm-10">
										<label><input type="radio" name="gender" value="male">Male</label>
										<label><input type="radio" name="gender" value="female">Female</label>
								  </div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2">Position:</label>
								<div class="col-sm-10">
									<input class="form-control" type="text" name="position">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2">Contact:</label>
								<div class="col-sm-10">
									<input class="form-control" type="number" name="contact">	
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2">Address:</label>
								<div class="col-sm-10">
									<input class="form-control" type="text" name="address">	
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-2 col-sm-offset-5 text-center">
									<input class="btn btn-success" type="submit" name="submit">
								</div>
							</div>
									 <input type="hidden" name="type" value="teacher">
						</form>

						<form id="cashierForm" class="form-horizontal" method="post" action="{{ route('register') }}">
									 {{ csrf_field() }}
							<div class="form-group">
								<label class="control-label col-sm-2" for="username">Username:</label>
								<div class="col-sm-10">
									<input class="form-control" type="text" name="username">	
								</div>
							</div>

							<div class="form-group">
								  <label class="control-label col-sm-2" for="name">First Name:</label>
								  <div class="col-sm-10">
										<input class="form-control" type="text" name="firstname">  
								  </div>
							</div>
							<div class="form-group">
								  <label class="control-label col-sm-2" for="lastname">Last Name:</label>
								  <div class="col-sm-10">
										<input class="form-control" type="text" name="lastname">  
								  </div>
							</div>
							<div class="form-group">
								  <label class="control-label col-sm-2" for="lastname">Birthday:</label>
								  <div class="col-sm-10">
										<input class="form-control" type="date" name="bdate">  
								  </div>
							</div>
							<div class="form-group">
								  <label class="control-label col-sm-2" for="lastname">Gender:</label>
								  <div class="col-sm-10">
										<label><input type="radio" name="gender" value="male">Male</label>
										<label><input type="radio" name="gender" value="female">Female</label>
								  </div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2">Password:</label>
								<div class="col-sm-10">
									<input class="form-control" type="password" name="password">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2">Retype Password:</label>
								<div class="col-sm-10">
									<input class="form-control" type="password" name="password_confirmation">	
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-2 col-sm-offset-5 text-center">
									<input class="btn btn-success" type="submit" name="submit">
								</div>
							</div>
									 <input type="hidden" name="type" value="cashier">
						</form>

								<form id="librarianForm" class="form-horizontal" method="POST" action="{{ route('register') }}">
									 {{ csrf_field() }}
									 <div class="form-group">
										  <label class="control-label col-sm-2" for="username">Username:</label>
										  <div class="col-sm-10">
												<input class="form-control" type="text" name="username">  
										  </div>
									 </div>

									 <div class="form-group">
								  <label class="control-label col-sm-2" for="name">First Name:</label>
								  <div class="col-sm-10">
										<input class="form-control" type="text" name="firstname">  
								  </div>
							</div>
							<div class="form-group">
								  <label class="control-label col-sm-2" for="lastname">Last Name:</label>
								  <div class="col-sm-10">
										<input class="form-control" type="text" name="lastname">  
								  </div>
							</div>
							<div class="form-group">
								  <label class="control-label col-sm-2" for="lastname">Birthday:</label>
								  <div class="col-sm-10">
										<input class="form-control" type="date" name="bdate">  
								  </div>
							</div>
							<div class="form-group">
								  <label class="control-label col-sm-2" for="lastname">Gender:</label>
								  <div class="col-sm-10">
										<label><input type="radio" name="gender" value="male">Male</label>
										<label><input type="radio" name="gender" value="female">Female</label>
								  </div>
							</div>

							 <div class="form-group">
								  <label class="control-label col-sm-2">Password:</label>
								  <div class="col-sm-10">
										<input class="form-control" type="password" name="password">
								  </div>
							 </div>

							 <div class="form-group">
								  <label class="control-label col-sm-2">Retype Password:</label>
								  <div class="col-sm-10">
										<input class="form-control" type="password" name="password_confirmation">  
								  </div>
							 </div>
							 <div class="form-group">
								  <div class="col-sm-2 col-sm-offset-5 text-center">
										<input class="btn btn-success" type="submit" name="submit">
								  </div>
							 </div>
							 <input type="hidden" name="type" value="librarian">
						</form>
					</div>
				</div>
			</div>
		  </div>
	 </div>
@endsection
