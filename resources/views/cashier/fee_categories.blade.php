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
						<?php $i=1 ?>
						@foreach($categories as $category)
							<tr>
								<td>{{ $i }}</td>
								<td class="text-center">{{ $category->accountability_name }}</td>
								<td class="text-center">Php {{ $category->amount }}</td>
								<td class="text-center">{{ $category->due_date}}</td>
								<td class="text-center">{{ $category->scope }}</td>
								<td class="text-center">
									<button class="btn btn-warning editCategory"><span class="glyphicon glyphicon-pencil" data-toggle="modal" data-target="#editCategory_{{ $category->id }}" ></span>edit</button>

									<div class="modal fade" id="editCategory_{{ $category->id }}" role="dialog">
									    <div class="modal-dialog">
									    	<div class="modal-content">
									        		<div class="modal-header bg-warning">
									          			<button type="button" class="close" data-dismiss="modal">&times;</button>
									          			<h4 class="modal-title"><span class="glyphicon glyphicon-pencil icons"></span>Edit Category</h4>
									        		</div>
									    		<form method="get" action="/cashier/edit_category" role="form">
									        		<div class="modal-body">
											        	<div class="input-group">
											        		<label class="input-group-addon"><b>Category Name: </b></label>
											        		<input type="text" name="accountability_name" class="form-control" required="" value="{{ $category->accountability_name }}"/>
											          	</div>
											          	<div class="input-group group">
											        		<label class="input-group-addon"><b>Amount: </b></label>
											        		<input type="text" name="amount" class="form-control" required="" value="Php {{ $category->amount }}" />
											          	</div>
											          	<div class="input-group group">
											        		<label class="input-group-addon"><b>Due Date: </b></label>
											        		<input type="date" name="due_date" class="form-control" required="" value="{{ $category->due_date }}" />
											          	</div>
											          	<div class="input-group group">
											        		<label class="input-group-addon"><b>Scope: </b></label>
											        		<select name="scope" class="form-control" required="" value="{{$category->scope}}">
											        			<option>all</option>
											        		</select>
											          	</div>
										          		<input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
										          		<input type="hidden" name="category_id" value="{{ $category->id}}"/>
										          	</div>
											        <div class="modal-footer">
											          <input type="submit" class="btn btn-success edit_category" value="OK"/>
											        </div>
									       		</form>
									      	</div>
									    </div>
									</div>
									<form style="display:inline" method="get" action="/cashier/delete_category">
										<input type="hidden" name="category_id" value="{{ $category->id}}"/>
										<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>delete</button>
									</form>
								</td>
							</tr>


						
						<?php $i++ ?>
						@endforeach
					
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
			        <form method="get" action="/cashier/add_new_category">
				        <div class="modal-body">
				        	<div class="input-group">
				        		<label class="input-group-addon"><b>Category Name: </b></label>
				        		<input type="text" name="accountability_name" class="form-control" required="" />
				          	</div>
				          	<div class="input-group group">
				        		<label class="input-group-addon"><b>Amount: </b></label>
				        		<input type="text" name="amount" class="form-control" required="" />
				          	</div>
				          	<div class="input-group group">
				        		<label class="input-group-addon"><b>Due Date: </b></label>
				        		<input type="date" name="due_date" class="form-control" required="" />
				          	</div>
				          	<div class="input-group group">
				        		<label class="input-group-addon"><b>Scope: </b></label>
				        		<select name="scope" class="form-control" required="">
				        			<option>all</option>
				        		</select>
				          	</div>
				          		<input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
				        </div>
				        <div class="modal-footer">
				          <input type="submit" class="btn btn-success" value="OK"/>
				        </div>
				    </form>
		      	</div>
		    </div>
		</div>
		
		
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/cashier/cashier.js') }}"></script>
@endsection