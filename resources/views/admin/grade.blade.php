@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{{ asset('css/admin/addClass.css') }}">
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/Chart.bundle.js') }}"></script>
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">
			<div class="page-header text-center">
				<h3>Grade</h3>
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
				<div class="list-group">
					@foreach($grades as $grade)
					<a id="{{ $grade->id }}" href="#" class="list-group-item">{{ $grade->name }}<span class="pull-right glyphicon glyphicon-menu-right"></a>
					@endforeach
				</div>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
			    <canvas id="chart-area" />
			</div>
			
		@endif		

	
	</div>
</div>
<script>
	var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };
	var config = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                ],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                ],
                label: 'Dataset 1'
            }],
            labels: [
                "Red",
                "Orange",
                "Yellow",
                "Green",
                "Blue"
            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Grade Information Statistic'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };
    $(function(){
		var ctx = document.getElementById("chart-area").getContext("2d");
        window.myDoughnut = new Chart(ctx, config);
	});

</script>
@endsection