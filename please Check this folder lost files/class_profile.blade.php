@extends('layouts.app')

@section('content')
	<title>Class Profile</title>
	<link href="/css/app.css" rel="stylesheet" />
	<link rel="stylesheet" href="/css/librarian.css"/>
	<script src="/js/app.js"></script>
</head>
<body>
	<div class="container" id="content">
		<div class="row" id="class_list">
			<div class="container-fluid">
				<div class="row" id="class_list_div">
					<h4 id="label">Class List</h4>
					<div class="table table-hover table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Student Name</th>	
									<th>Sex</th>
									<th>Birthdate</th>
									<th>Age</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Abisado, Rosiebelt</td>
									<td>Male</td>
									<td>May 14, 1997</td>
									<td>20</td>
								</tr>
								<tr>
									<td>Arcillas, Justleh</td>
									<td>Male</td>
									<td>May 14, 1997</td>
									<td>20</td>
								</tr>
								<tr>
									<td>Cruz, Donn</td>
									<td>Male</td>
									<td>May 14, 1997</td>
									<td>20</td>
								</tr>
								<tr>
									<td>Dagdag, Andrew</td>
									<td>Male</td>
									<td>February 10, 1997</td>
									<td>20</td>
								</tr>
								<tr>
									<td>Dela Cruz, Jacob</td>
									<td>Male</td>
									<td>October 12, 1998</td>
									<td>20</td>
								</tr>
								<tr>
									<td>Dela Cruz, Relyn</td>
									<td>Female</td>
									<td>January 3, 1997</td>
									<td>20</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>