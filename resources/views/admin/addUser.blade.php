@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{{ asset('css/addUser.css') }}">
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/addUser.js') }}"></script>
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

        				<form id="adminForm" class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
        					<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
	        					<label class="control-label col-sm-2" for="username">Username:</label>
	        					<div class="col-sm-10">
	        						<input class="form-control" type="text" name="username">	
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
	        					</div>
        					</div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="control-label col-sm-2" for="name">Name:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name">  
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

        					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        						<label class="control-label col-sm-2">Password:</label>
        						<div class="col-sm-10">
        							<input class="form-control" type="password" name="password">	
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
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

        				<form id="teacherForm" class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
        					<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
	        					<label class="control-label col-sm-2" for="username">Username:</label>
	        					<div class="col-sm-10">
	        						<input class="form-control" type="text" name="username">	
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif	
	        					</div>
        					</div>

        					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        						<label class="control-label col-sm-2">Password:</label>
        						<div class="col-sm-10">
        							<input class="form-control" type="password" name="password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif	
        						</div>
        					</div>

        					<div class="form-group">
        						<label class="control-label col-sm-2">Retype Password:</label>
        						<div class="col-sm-10">
        							<input class="form-control" type="password" name="password_confirmation">	
        						</div>
        					</div>

        					<div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
        						<label class="control-label col-sm-2">First Name:</label>
        						<div class="col-sm-10">
        							<input class="form-control" type="text" name="firstname">
                                    @if ($errors->has('firstname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                        </span>
                                    @endif	
        						</div>
        					</div>

        					<div class="form-group{{ $errors->has('middlename') ? ' has-error' : '' }}">
        						<label class="control-label col-sm-2">Middle Name:</label>
        						<div class="col-sm-10">
        							<input class="form-control" type="text" name="middlename">	
                                    @if ($errors->has('middlename'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('middlename') }}</strong>
                                        </span>
                                    @endif
        						</div>
        					</div>

        					<div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
        						<label class="control-label col-sm-2">Last Name:</label>
        						<div class="col-sm-10">
        							<input class="form-control" type="text" name="lastname">
                                    @if ($errors->has('lastname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                    @endif	
        						</div>
        					</div>

        					<div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
        						<label class="control-label col-sm-2">Position:</label>
        						<div class="col-sm-10">
        							<input class="form-control" type="text" name="position">
                                    @if ($errors->has('position'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('position') }}</strong>
                                        </span>
                                    @endif	
        						</div>
        					</div>

        					<div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
        						<label class="control-label col-sm-2">Contact:</label>
        						<div class="col-sm-10">
        							<input class="form-control" type="number" name="contact">	
                                    @if ($errors->has('contact'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contact') }}</strong>
                                        </span>
                                    @endif
        						</div>
        					</div>

        					<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
        						<label class="control-label col-sm-2">Address:</label>
        						<div class="col-sm-10">
        							<input class="form-control" type="text" name="address">	
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
        						</div>
        					</div>

        					<div class="form-group">
        						<div class="col-sm-2 col-sm-offset-5 text-center">
        							<input class="btn btn-success" type="submit" name="submit">
        						</div>
        					</div>
                            <input type="hidden" name="type" value="teacher">
        				</form>

        				<form id="cashierForm" class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
        					<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
	        					<label class="control-label col-sm-2" for="username">Username:</label>
	        					<div class="col-sm-10">
	        						<input class="form-control" type="text" name="username">	
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
	        					</div>
        					</div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="control-label col-sm-2" for="name">Name:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name">  
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

        					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        						<label class="control-label col-sm-2">Password:</label>
        						<div class="col-sm-10">
        							<input class="form-control" type="password" name="password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif	
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
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label class="control-label col-sm-2" for="username">Username:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="username"> 
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif   
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="control-label col-sm-2" for="name">Name:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name">  
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="control-label col-sm-2">Password:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif    
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
