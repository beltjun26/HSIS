@extends('layouts.app')
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/addStudent.js') }}"></script>
@section('content')
	<div class="container">
		<div class="row">
			@if($grades->count()==0)
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="page-header text-center">
						<h2>No Grade in the Database yet</h2>
						<a href="/admin/addGrade" class="btn btn-default">Add Grade</a>
					</div>
				</div>
			@else

			@endif
		</div>
	</div>
@endsection