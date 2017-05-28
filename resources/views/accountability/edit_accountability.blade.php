@extends('layouts.app')

@section('content')
	
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 style="text-align: center">
				Edit accountability
			</h2>
			<div class="panel panel-default" style="margin-top: 30px;">
				<div class="panel-body panel-default">
					<form action="/accountability/update_accountability/{{ $acc->id }}" method="post">
						{{ csrf_field() }}
						{{ method_field('PUT') }}
						<input type="hidden" name="scope" value="{{ $acc->scope }}">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									Accountability name
								</div>
								<input class="form-control" name="accountability_name" value="{{$acc->accountability_name}}" />
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									Amount
								</div>
								<input class="form-control" type="number" name="accountability_amount" value="$acc->amount" step="0.01" />
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									Date
								</div>
								<input class="form-control" type="date" name="accountability_date" value="$acc->due_date" value="{{$acc->date}}"/>
							</div>
						</div>
						<input type="submit" class="btn btn-success pull-right" value="Submit" />
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection