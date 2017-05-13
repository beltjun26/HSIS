@extends('layouts.app')
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/Chart.bundle.js') }}"></script>
@section('content')
    <div class="container">
        <div>
        	<div style="width:75%;">
				<canvas id="canvas"></canvas>
			</div>
        </div>
    </div>
@endsection
