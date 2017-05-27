@extends('layouts.app')
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/teacher/assignStudent.js') }}"></script>
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 text-center">
				<div class="page-header">
					<h3>Assing Student</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-5 col-md-5 col-lg-5">
				<div class="panel panel-default">
					<div class="panel-heading">
						Student List
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12">
								<form id="search" method="post">
								{{ csrf_field() }}
									<div class="form-group">
										<label for="search">Search Student: </label>
										<input class="form-control" type="text" name="search" placeholder="Keyword">
									</div>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12">
								<label id="label" style="display: none;">Result:</label>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12">
								<div class="list-group" id="result">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-2 col-md-2 col-lg-2 text-center">
				<h4>Assign to <span class="glyphicon glyphicon-arrow-right"></span></h4>
			</div>
			<div class="col-sm-5 col-md-5 col-lg-5">
				<div class="row text-center">
					<h3 id="grade">{{ $result->name }}</h3>
				</div>
				<div class="row text-center">
					<button id="change" class="btn btn-primary">Change Class</button>
				</div>
			</div>
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
	  <div id="errorModal" class="modal fade">
			<div class="modal-dialog">
				 <div class="modal-content v-center">
					  <div id="modalContent" class="modal-body text-center text-danger bg-warning">
							User Successfully Addded
					  </div>
				 </div>
			</div>
	  </div>
@endsection