@extends('layouts.cashier_layout')

@section('content')
	<div class="profile-parts">
		<div class="col-sm-3 col-sm-offset-1">
			<img src="{{asset('images/profile.jpg')}}" id="profile" class="img img-circle img-fluid col-sm-12">
		</div>
		<div class="col-sm-6 top-info">
			<p><h1>Rosiebelt Jun Abisado</h1>
			<h4>School Cashier</h4>
			<span id="duration">S.Y. 2016 - 2017</span>
			</p>
		</div>

		<div class="col-sm-12 personal-info">
			<div class=" col-sm-9 col-sm-offset-1">
				<div class="panel panel-info">
					<div class="panel-heading"><span class="glyphicon glyphicon-user icons"></span>Personal Information</div>
					<div class="panel-body">
						<table class="table">
							<tr>
								<td></td>
								<td><b>Full Name:</b></td>
								<td>Rosiebelt Jun Abisado</td>
							</tr>
							<tr>
								<td></td>
								<td><b>Bithday:</b></td>
								<td>July 4, 1990</td>
							</tr>
							<tr>
								<td></td>
								<td><b>Age:</b></td>
								<td>30 yrs old</td>
							</tr>
							<tr>
								<td></td>
								<td><b>Address:</b></td>
								<td>Seoul, Korea</td>
							</tr>
							<tr>
								<td></td>
								<td><b>Contact Number:</b></td>
								<td>0912-212-1231</td>
							</tr>
							<tr>
								<td></td>
								<td><b>Email Address:</b></td>
								<td>dalinalangfinals@gmail.com</td>
							</tr>
							<tr>
								<td></td>
								<td><b>Work Experience:</b></td>
								<td>Single for 30 years</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection