@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{{ asset('css/admin/addClass.css') }}">
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/class.js') }}"></script>
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
					@if(Auth::user()->type=="admin")
					<a href="/admin/addClass" class="btn btn-default">Add Class</a>
					@endif
				</div>
			</div>
		@else
			<div class="col-sm-4 col-md-4 col-lg-4">
				<div class="row">
					<div class="col-md-12">
						<h4>Grades</h4>	
					</div>
					
				</div>
				<div id="btnList" class="list-group">
					@foreach($grades as $grade)
					<a href="#" onclick="showClass({{ $grade->id }}, event)" class="list-group-item">{{ $grade->name }}<span class="pull-right glyphicon glyphicon-menu-right"></a>
					@endforeach
				</div>
			</div>
			<div id="listContainer" class="col-sm-6 col-md-6 col-lg-6 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
				
			    @foreach($grades as $grade)
			    	<div class="panel panel-default" id="{{ $grade->id }}" style="display: none">
			    		<div class="panel-heading">
			    			<h4>{{ $grade->name }}</h4>
			    		</div>
			    		<div class="panel-body">
			    			<div class="list-group">
				    		@forelse($grade->getClasses as $class)
							<a href="/{{ Auth::user()->type }}/class/{{ $class->name }}" class="list-group-item">{{ $class->name }}</a>
							@empty
								No section Added
							@endforelse
						</div>
			    		</div>
			    	</div>
			    	
			    @endforeach
			</div>
			
		@endif		

	
	</div>
</div>
@endsection