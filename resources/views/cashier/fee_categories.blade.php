@extends('layouts.app')

@section('content')

	<div class="right-parts">
		<div class="col-sm-12 header">
			<div class="title"><span class="glyphicon glyphicon-book icons"></span>Fee Categories</div><hr/>
		</div>

		<div class="col-sm-12 new-category-div">
			<button class="btn btn-success pull-right" data-toggle="modal" data-target="#newCategoryMod"><span class="glyphicon glyphicon-plus icons"></span>New Category</button>
		</div>

		<div class="col-sm-12">
		    <div class="history-table panel panel-default categories-table">
				<table class="table table-hover table-bordered">
					<thead>
						<th class="text-center t-head" colspan="2">CATEGORY</th>
						<th class="text-center t-head">AMOUNT</th>
						<th class="text-center t-head">DUE DATE</th>
						<th class="text-center t-head">SCOPE</th>
						<th class="text-center t-head">ACTION</th>
					</thead>
					<tr>
						<td>1</td>
						<td class="text-center">Sports Fee</td>
						<td class="text-center">Php 100.00</td>
						<td class="text-center">May 29, 2017</td>
						<td class="text-center">all</td>
						<td class="text-center">
							<button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span>edit</button>
							<button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>delete</button>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td class="text-center">Sports Fee</td>
						<td class="text-center">Php 100.00</td>
						<td class="text-center">May 29, 2017</td>
						<td class="text-center">all</td>
						<td class="text-center">
							<button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span>edit</button>
							<button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>delete</button>
						</td>
					</tr>
				</table>
	   		</div>
		</div>
	</div>

		<!-- MODALS -->
		<div class="modal fade" id="newCategoryMod" role="dialog">
		    <div class="modal-dialog">
		      <div class="modal-content">
		        <div class="modal-header bg-primary">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title"><span class="glyphicon glyphicon-plus icons"></span>New Category</h4>
		        </div>
		        <div class="modal-body">
		        	<div class="input-group">
		        		<label class="input-group-addon"><b>Category Name: </b></label>
		        		<input type="text" name="category_name" class="form-control" />
		          	</div>
		          	<div class="input-group group">
		        		<label class="input-group-addon"><b>Amount: </b></label>
		        		<input type="text" name="amount" class="form-control" />
		          	</div>
		          	<div class="input-group group">
		        		<label class="input-group-addon"><b>Due Date: </b></label>
		        		<input type="date" name="due_date" class="form-control" />
		          	</div>
		          	<div class="input-group group">
		        		<label class="input-group-addon"><b>Scope: </b></label>
		        		<input type="text" name="scope" class="form-control" />
		          	</div>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
		        </div>
		      </div>
		      
		    </div>
		</div>

@endsection