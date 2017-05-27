@extends('layouts.app')

@section('content')
	<script type= "text/javascript" href="{{ asset('js/jquery.js') }}"></script>
	<script type= "text/javascript" href="{{ asset('js/app.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/teacher/homepage.css')}}">


	<!-- <div class= "container"> -->
		<div class="panel panel-default" id = "homepanel">
			<div class="panel-body">
				 <div>
					<p class ="text-center" id="banner">High School Information System</p>
					<p class="text-center school">Pavia National High School</p>
					<p class="text-center school" >Pavia Iloilo</p>
				</div>
			</div>
			<div class="panel panel-default" id = "mission-panel">
				<div class="panel-body">
					<h3>MISSION</h3>
					<p>
						This school wants to mold children to be better persons someday and to help and serve the country. we will enrich them with knowledge that will help them be ready on what ever career they want to pursue on their life. 

					</p>
				</div>
			</div>
			<div class="panel panel-default" id = "vision-panel">
				<div class="panel-body">
					<h3>VISION</h3>
					<p>
						This school wants to mold children to be better persons someday and to help and serve the country. we will enrich them with knowledge that will help them be ready on what ever career they want to pursue on their life. 

					</p>
				</div>
			</div>
			<div class="panel panel-default" id = "announcement-panel">
				<div class="panel-body">
					<h3>Announcement(s):</h3>
						<dl>
							<dt>Commencement Exercise
								<dd>March 30, 2018</dd>
							</dt>
							<dt>Enrollment
								<dd>June 4, 2018</dd>
							</dt>
						</dl>
						
				</div>
			</div>



		</div>
		 
		
	<!-- </div> -->


@endsection