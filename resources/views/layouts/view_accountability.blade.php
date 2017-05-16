<!DOCTYPE html>
<html>
<head>
	<title>View Accountability</title>
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
	<div id="sidebar">
	</div>
	<div class="container" id="content">
		<div class="dropdown" id="drop">
			<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
				SORT/GROUP BY <span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a href="#">Accountability(alphabetical)</a></li>
				<li><a href="#">Date Settled</a></li>
				<li><a href="#">Status</a></li>
			</ul>
		</div>
		<div class="row">
			<div id="dynamic-content-name">
				<p>Accountability of: <span id="student_name" href="#">John Doe</span></p> <!-- href=student_profile -->
			</div>
			<div id="table-div">
				<div class="table table-hover table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Accountability</th>
								<th>Settle With</th>
								<th>Status</th>
								<th>Date Settled</th>
								<th>Edit</th>
							</tr>
						</thead>
						<!-- Hard-coded lang anay -->
						<tbody>
							<tr> 
								<td>School Fees</td>
								<td><a href="#">Cashier</a></td>
								<td>Not settled</td>
								<td>Not available</td>
								<td></td>
							</tr>
							<tr> 
								<td>Book borrowed</td>
								<td><a href="#">Librarian</a></td>
								<td>Settled</td>
								<td>April 12, 2016</td>
								<td><a href="#">Edit</a></td>
							</tr>
							<tr> 
								<td>Book borrowed</td>
								<td><a href="#">Librarian</a></td>
								<td>Not settled</td>
								<td>Not available</td>
								<td><a href="#">Edit</a></td>
							</tr>
							<tr>
								<td>Floor wax</td>
								<td><a href="#">Teacher</a></td>
								<td>Settled</td>
								<td>March 11, 2016</td>
								<td></td>
							</tr>
							<tr>
								<td>Textbook</td>
								<td><a href="#">Teacher</a></td>
								<td>Settled</td>
								<td>April 11, 2017</td>
								<td></td>
							</tr>
							<tr>
								<td>1st Examination</td>
								<td><a href="#">Teacher</a></td>
								<td>Settled</td>
								<td>April 11, 2017</td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>