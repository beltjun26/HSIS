@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="page-header text-center	">
					<h3>Add Subject</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form method="post" action="/admin/addSubject">
					{{ csrf_field() }}
					<div class="form-group {{ isset($invalid)? ' has-error':'' }}">
						<div class="input-group ">
							<span class="input-group-addon">Subject Name</span>
							<input type="text" name="name" class="form-control" placeholder="Name" required>
						</div>	
						@if (isset($invalid))
                            <span class="help-block">
                                <strong>{{ $invalid }}</strong>
                            </span>
                        @endif
					</div>
					<div class="form-group text-center">
						<input class="btn btn-success" type="submit" name="submit">
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection