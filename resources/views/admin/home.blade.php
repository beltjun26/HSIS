@extends('layouts.app')
<script type="text/javascript" src="{{ asset('js/Chart.bundle.js') }}"></script>
<script type="text/javascript">
    isScript = true;
    myScripts = [];
    myScripts.push("{{ asset('js/admin/graphing.js') }}");
    myScripts.push("{{ asset('js/admin/timer.js') }}");
</script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/admin/home.css') }}">
@section('content')
    <div class="container">
        <div class="row">
        	<div class="col-sm-3 col-lg-3 col-md 3">
        		<div class="panel panel-default">
        			<div class="panel-heading">
        				Time Check
        			</div>
        			<div class="panel-body">
        				<div id="time"></div>
        			</div>
        		</div>
                <div class="list-group">
                    <li class="list-group-item">Male<span class="pull-right glyphicon glyphicon-menu-right"></li>
                    <li class="list-group-item">Female<span class="pull-right glyphicon glyphicon-menu-right"></li>
                    <li class="list-group-item">Students<span class="pull-right glyphicon glyphicon-menu-right"></li>
                    <li class="list-group-item">Teacher<span class="pull-right glyphicon glyphicon-menu-right"></li>
                    <li class="list-group-item">Another Info<span class="pull-right glyphicon glyphicon-menu-right"></li>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Annoucement
                    </div>
                    <div class="panel-body">
                        This announce ment
                        anouncement herer
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
@endsection
