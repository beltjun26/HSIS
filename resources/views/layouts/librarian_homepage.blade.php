<!DOCTYPE html>
<html>
<head>
	<!-- <meta name="viewport" content="width=device - width, initial-scale=1" />
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type"> -->
	<title>Librarian Homepage</title>
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
				<ul class="nav navbar-nav navbar-right">
					<li class="active">
						<a href="#" data-toggle="tooltip" data-placement="bottom" title="Home"><span class="glyphicon glyphicon-home"></span> Home</a>
					</li>
					<li>
						<a href="#" data-toggle="tooltip" data-placement="bottom" title="Logout"><span class="glyphicon glyphicon-log-out"></span> Log-out</a>
					</li>
				</ul>
		    	<form class="navbar-form navbar-right center">
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

	<div class="container" id="content">
		<div class="row">
			<div id="buttons-group">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#borrowbooks">Borrow Books</button>
				<button type="button" class="btn btn-warning">Edit Accountabilities</button>
				
			</div>
		</div>
		<div class="row" id="table-div">
			<div class="col-md-12">
				<div class="table table-hover table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Student Name</th>	
								<th>Book Borrowed</th>
								<th>Date Borrowed</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>John Doe</td>
								<td>Lorem</td>
								<td>April 11, 2017</td>
								<td>dolor</td>
							</tr>
							<tr>
								<td>Sheryl Cruz</td>
								<td>amet</td>
								<td>April 11, 2017</td>
								<td>adipiscing</td>
							</tr>
							<tr>
								<td>Angel Eyes</td>
								<td>Integer</td>
								<td>April 11, 2017</td>
								<td>odio</td>
							</tr>
							<tr>
								<td>Maria Clara</td>
								<td>libero</td>
								<td>April 11, 2017</td>
								<td>cursus</td>
							</tr>
							<tr>
								<td>Super Mario</td>
								<td>dapibus</td>
								<td>April 11, 2017</td>
								<td>Sed</td>
							</tr>
							<tr>
								<td>Luigi Bro</td>
								<td>Nulla</td>
								<td>April 11, 2017</td>
								<td>sem</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div  class="modal fade" id="borrowbooks" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
    				<h4 class="modal-title">Borrow Books</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">Student LRN:</div>
								<input type="text" class="form-control" name="LRN" />
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">Book borrowed:</div>
								<input class="form-control" placeholder="" />
							</div>	
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">Date borrowed:</div>
								<input type="date" class="form-control" name="Date" />
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Ok</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>