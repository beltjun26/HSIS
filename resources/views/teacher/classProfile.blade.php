@extends('layouts.app')

@section('content')
	<title>Class Profile</title>
	<link href="/css/app.css" rel="stylesheet" />
	<link rel="stylesheet" href="/css/librarian.css"/>
</head>
<body>
	<div class="container" id="content">
		<div class="row" id="class_list">
			<div class="container-fluid">
				<div class="row" id="class_list_div">
					<div class="row text-center">
						<h3>{{ $result->name }}</h3>
					</div>
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
								@forelse($result->studentList as $student)
								<tr>
									<td>{{ $student -> fullName()}}</td>
									<td>{{ $student->gender }}</td>
									<td>{{ $student->bdate->format('j F Y')}}</td>
									<td>20</td>
								</tr>
								@empty
								<tr class="text-center">
									<td colspan="4" class="text-center"> No Data</td>
								</tr>
								@endforelse
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<a href="/{{ Auth::user()->type }}/assign/{{ $result->name }}" class="btn btn-success">Add Student</a>
		</div>
	</div>
</body>
</html>