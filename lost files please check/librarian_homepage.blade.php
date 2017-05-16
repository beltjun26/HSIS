@extends('layouts.app')

@section('content')
	

	<div class="container" id="content">
		<div class="row">
			<p id="type">This is your Homepage.</p>
		</div>
		<div class="row">
			<div id="buttons-group">
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#borrowbooks">Borrow Books</button>
				<button type="button" class="btn btn-default">Edit Accountabilities</button>
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
@endsection