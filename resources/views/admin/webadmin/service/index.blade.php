@extends('layouts.app')

	@section('layoutRole')

		@include('layouts.webadmin.nav')

	@endsection

	@section('content')

		<div class="container">
			<div class="col-md-8" style="margin-top: 30px !important;">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">
							Section 1
							<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
						</h3>
					</div>

					@forelse($service as $data)

						<div class="panel-body">

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Introduction</span></p>
								<div class="well well-sm">{!! $data->intro !!}</div>
							</div>

						</div>

					@empty

						<div class="panel-body">

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Introduction</span></p>
								<div class="well well-sm">No records found</div>
							</div>

						</div>

					@endforelse

				</div>
			</div>

			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">
							Section 2
							<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
						</h3>
					</div>

					@forelse($service as $data)

						<div class="panel-body">

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Body</span></p>
								<div class="well well-sm">{!! $data->body !!}</div>
							</div>
						
						</div>

					@empty

						<div class="panel-body">

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Body</span></p>
								<div class="well well-sm">No records found</div>
							</div>
						
						</div>

					@endforelse

				</div>
			</div>
			
			@foreach($service as $data)

				<div class="col-md-8" style="margin-bottom: 30px !important;">
					<a href="{{ route('webadmin.service.edit', ['id' => $data->id]) }}" class="btn btn-success pull-right">Edit Post</a>
				</div>
			
			@endforeach

		</div>

	@endsection