@extends('layouts.app')
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/addStudent.js') }}"></script>
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="page-header">
    			<h3 class="text-center">ADD STUDENTS</h3>
    		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					To Class:
				</div>
				<div class="panel-body">
					<div class="form-group">
						<select class="form-control" name="sectionName">
						<option value="none">Dont assign!</option>
						@forelse($classes as $class)
							<option value="{{ $class->name }}"name>{{ $class->getGrade->name }} {{ $class->name }}</option>
						@empty

						@endforelse
					</select>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	  <div id="successModal" class="modal fade">
		<div class="modal-dialog">
			 <div class="modal-content v-center">
				  <div class="modal-body text-center text-success">
						Student Successfully Addded
				  </div>
			 </div>
		</div>
	</div>
	<form id="form" method="POST" action="/addStudent">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>LRN</th>
							<th>First Name</th>
							<th>Middle Name</th>
							<th>Last Name</th>
							<th>Gender</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							{{ csrf_field() }}
							<td>
								<input class="form-control" type="text" name="LRN" required>
							</td>
							<td>
								<input class="form-control" type="text" name="first_name" required>
							</td>
							<td>
								<input class="form-control" type="text" name="middle_name" required>
							</td>
							<td>
								<input class="form-control" type="text" name="last_name" required>
							</td>
							<td>
								<select class="form-control" name="gender">
									<option value="female">Female</option>
									<option value="male">Male</option>
								</select>
							</td>	
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Birthday</th>
							<th>Address</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<input class="form-control" type="date" name="bdate" required>
							</td>
							<td>
								<input class="form-control" type="text" name="address" required>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h4>Optional</h4>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Father's Name</th>
							<th>Mother's Name</th>
							<th>Contact Number</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<input class="form-control" type="text" name="mother_fullname">
							</td>
							<td>
								<input class="form-control" type="text" name="father_fullname">
							</td>
							<td>
								<input class="form-control" type="number" name="contact-num">
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 text-center">
				<button class="btn btn-success">Add <span class="glyphicon glyphicon-plus"></span></button>
			</div>
		</div>
	</form>
</div>
@endsection