@extends('layouts.app')
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/Chart.bundle.js') }}"></script>

@section('content')
    <div class="container">
        <div class="row">
        	<div class="col-sm-3 col-lg-3 col-md 3">
        		<div class="panel panel-default">
        			<div class="panel-heading">
        				School Information
        			</div>
        			<div class="pane-body">
        				Che che
        			</div>
        		</div>
        	</div>
        	<div class="col-sm-9 col-md-9 col-lg-9">
        		<canvas id="graph"></canvas>
        	</div>
        </div>
        <div class="row">
        	
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/admin/timer.js') }}"></script>
@endsection
