@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{{ asset('css/admin/addClass.css') }}">
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/Chart.bundle.js') }}"></script>
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">
			<div class="page-header text-center">
				<h3>Class</h3>
			</div>
		</div>
	</div>
	<div class="row">
		@if($grades->count()==0)
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="page-header text-center">
					<h2>No Data in the Database yet</h2>
					<a href="/admin/addClass" class="btn btn-default">Add Class</a>
				</div>
			</div>
		@else
			<div class="col-sm-4 col-md-4 col-lg-4">
				<div class="row">
					<div class="col-md-12">
						<h4>Grades</h4>	
					</div>
					
				</div>
				<div class="list-group">
					@foreach($grades as $grade)
					<a id="{{ $grade->id }}" href="#" class="list-group-item">{{ $grade->name }}<span class="pull-right glyphicon glyphicon-menu-right"></a>
					@endforeach
				</div>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
				
			    @foreach($grades as $grade)
			    	<div class="list-group" id="{{ $grade->id }}">
			    		@forelse($grade->getClasses as $class)
						<a href="" class="list-group-item">{{ $class->name }}</a>
						@empty

						@endforelse
					</div>
			    @endforeach
			</div>
			
		@endif		

	
	</div>
</div>
@endsection