@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		@if($classes->count()==0)
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="page-header text-center">
					<h2>No Data in the Database yet</h2>
					<a href="/admin/addClass" class="btn btn-default">Add Class</a>
				</div>
			</div>
		@else
		
		@endif		

	
	</div>
</div>

@endsection