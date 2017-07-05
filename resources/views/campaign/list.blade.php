@extends('base')
@section('content')
	<div class="row">
		<a href="{{ url('/campaign/create')}}"> Create New Campaign </a>
		<div class="row">
			<span class="text-success">{{ $message or '' }}</span>
		</div>
		<div class="row table margin-top-30">
				<div class="col-md-3"> <strong>Campaign Name </strong></div>
				<div class="col-md-3"> <strong>Campaign Code </strong> </div>
				<div class="col-md-6"> <strong>Campaign Tracking URL </strong></div>
			</div>
		@if( isset($data))
			@foreach( $data as $row)
				<div class="row table">
					<div class="col-md-3"> {{ $row['name'] }} </div>
					<div class="col-md-3"> {{ $row['code'] }} </div>
					<div class="col-md-6"> {{ url('/tracking/'.$row['code'].'.gif') }} </div>
				</div>
			@endforeach
		@endif
	</div>
@endsection