@extends('layouts.app')

@section('content')
<script type="text/javascript" src = "{{ asset('js/saveGrade.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('js/saveGrade.css') }} " />
<div class="panel panel-default">
	<div class="panel-heading">
		Edit Grades
	</div>
	<div class="panel-body">
		<p>This is the body</p>
	</div>
</div>

@endsection