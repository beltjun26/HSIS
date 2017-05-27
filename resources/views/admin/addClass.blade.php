@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{{ asset('css/admin/addClass.css') }}">
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/addClass.js') }}"></script>
@section('content')
<div class="container">
	<div id="successModal" class="modal fade">
		<div class="modal-dialog">
			 <div class="modal-content" style="margin-top: 50%">
				  <div class="modal-body text-center text-success">
						User Successfully Addded
				  </div>
			 </div>
		</div>
	</div>
	<div id="errorModal" class="modal fade">
		<div class="modal-dialog">
			 <div class="modal-content" style="margin-top: 50%">
				  <div class="modal-body text-center text-danger">
						<span class="glyphicon glyphicon-warning-sign"></span> Class already Exist!
				  </div>
			 </div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="page-header text-center	">
				<h3>Add Class</h3>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3 col-md-3 col-lg-3">
			<div class="row">
				<h4>Select Grade</h4>
			</div>
			<div class="row">
				<div class="list-group">
					@forelse($grades as $grade)
					<a id="{{ $grade->id }}" href="#" class="list-group-item">{{ $grade->name }}<span class="pull-right glyphicon glyphicon-menu-right"></a>
					@empty
					<a class="list-group-item">Sorry please add Grade first</a>
					@endforelse
				</div>
			</div>
		</div>
		<div class="col-sm-9 col-md-9 col-lg-9">
			<form class="form-horizontal" id="form" method="POST" action="/addClass">
			{{ csrf_field() }}

				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<h4 id="selected" class="text-danger" style="visibility: hidden;">Please Select Grade!</h4>
						<input id="grade" type="hidden" name="grade_id" value="0">
						<h4>Selected: <span id="status" class="text-success">None</span></h4>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Section Name</label>
					<div class="col-md-6">
						<input class="form-control" type="text" name="name" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Room Assignment</label>
					<div class="col-md-6">
						<input class="form-control" type="text" name="classroom" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Advisor</label>
					<div class="col-md-6">
						<select class="form-control" name="teacher_id">
							@forelse($teachers as $teacher)
								<option value="{{ $teacher->id }}">{{ $teacher->loginInfo->nameOfUser() }}</option>
							@empty
								<option>No teacher is the Data base!</option>
							@endforelse
						</select>
					</div>
				</div>
				@if($teachers->count() == 0)
				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<a class="btn btn-primary" href="/admin/addUser" name="addTeacer">Add Teacher</a>
					</div>
				</div>
				@endif
				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<input type="submit" name="submit" class="btn btn-success{{ $teachers->count() == 0? ' disabled': '' }}" value="Add" {{ $teachers->count() == 0? ' disabled': '' }}>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection