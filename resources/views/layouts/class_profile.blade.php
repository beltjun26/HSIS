<!DOCTYPE html>
<html>
<head>
	<!-- <meta name="viewport" content="width=device - width, initial-scale=1" />
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type"> -->
	<title>Teacher Profile</title>
	<link href="/css/app.css" rel="stylesheet" />
	<link rel="stylesheet" href="/css/style.css"/>
	<script src="/js/app.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
    			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#langCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
      			<h3><a class="navbar-brand" href="#"><span class="glyphicon glyphicon-education"></span> H<small>igh</small> S<small>chool</small> I<small>nformation</small> S<small>ystem</small> </a></h3>
   			</div>
			<div class="collapse navbar-collapse" id="langCollapse" >
				<ul class="nav nav-pills navbar-nav navbar-right">
					<li>
						<a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
						<!-- This links to logout -->
					</li>
				</ul>
		    	<form class="navbar-form navbar-right">
					<div class="form-group">
						<div class="input-group">
							<input class="form-control" placeholder="Search..." id="search" />
							<div class="input-group-btn">
								<button class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
							</div>
						</div>	
					</div>
				</form>
			</div>
		</div>	
	</nav>

	<div class="col-md-3 col-lg-3" id="profile">
		<div class="row" id="profilepic">
			<img src="/img/class.jpg" class="img-rounded center-block" />
		</div>
		<div class="row center-block" id="teachername">
			<p>Grade 7 - 1</p>
			<h3><small>Advisory of: Heidi Gonzales</small></h3>
		</div>
	</div>

	<div class="container" id="class_profile_content">
		<div class="row" id="class_list">
			<div class="container-fluid">
				<h3 id="class_list_names">Class List</h3>

			</div>
		</div>
	</div>
</body>
</html>