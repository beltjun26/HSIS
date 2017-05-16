@extends('layouts.app')

@section('content')
	<title>View Accountability</title>
	<link href="/css/app.css" rel="stylesheet" />
	<link rel="stylesheet" href="/css/librarian.css"/>
	<script src="/js/app.js"></script>
</head>
<body>
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
				<p>Accountability of <span id="student_name" href="#">John Doe</span></p> <!-- href=student_profile -->
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