@extends('layouts.app')
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/addGrade.js') }}"></script>
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="page-header text-center">
					<h3>Add Grade</h3>
				</div>
			</div>			
		</div>
		<div id="successModal" class="modal fade">
			<div class="modal-dialog">
				 <div class="modal-content" style="margin-top: 50%">
					  <div class="modal-body text-center text-success">
							User Successfully Addded
					  </div>
				 </div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="row">
					<h4>Existing Grade/s</h4>
				</div>
				<div class="row">
					<ul class="list-group">
						@forelse($grades as $grade)
							<li class="list-group-item">{{ $grade->name }}</li>
						@empty
							<li class="list-group-item">No Grade Yet!</li>
						@endforelse
					</ul>
				</div>
			</div>
			<div class="col-sm-9 col-md-9 col-lg-9">
				<div class="row">

					<form class="form-horizontal" id="form">
					{{ csrf_field() }}	
						<div class="form-group">
							<label class="col-sm-4 control-label">Grade Name</label>
							<div class="col-md-6">
								<input class="form-control" type="text" name="name" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<input type="submit" name="submit" class="btn btn-success" value="Add">
							</div>
						</div>
					</form>
				</div>
				
			</div>
		</div>
	</div>

@endsection