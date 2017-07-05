@extends('base')
@section('content')
	<div class="row">
		<a href="{{ url('/campaign/create')}}"> Showing stats" </a>

		<div class="row table margin-top-30">
				<div class="col-md-3"> <strong>Campaign Code </strong></div>
				<div class="col-md-3"> <strong>Visits / Logged Events </strong> </div>
				<div class="col-md-3"> <strong>Unique Visits  </strong> </div>
			</div>

		@foreach( $grouped_logs as $row)
			<div class="row table">
				<div class="col-md-3"> {{ $row['campaign_code'] }} </div>
				<div class="col-md-3"> {{ $row['total_visits'] }} </div>
				<div class="col-md-3"> {{ $row['unique_visits'] }} </div>
			</div>
		@endforeach
	</div>
@endsection