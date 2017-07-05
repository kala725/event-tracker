@extends('base')
@section('content')
	<div class="row">
		<a href="{{ url('/campaign/create')}}"> Showing Log for the Campaign "{{$campaign_code}}" </a>

		<div class="row table margin-top-30">
				<div class="col-md-2"> <strong>IP </strong></div>
				<div class="col-md-2"> <strong>User Agent </strong> </div>
				<div class="col-md-1"> <strong>Browser </strong></div>
				<div class="col-md-1"> <strong>Is Mobile </strong></div>
				<div class="col-md-2"> <strong>Robot </strong></div>
				<div class="col-md-2"> <strong>Time </strong></div>
				<div class="col-md-2"> <strong>Other Details </strong></div>
			</div>

		@foreach( $log as $row)
			<div class="row table">
				<div class="col-md-2"> {{ $row['ip'] }} </div>
				<div class="col-md-2"> {{ $row['user_agent'] }} </div>
				<div class="col-md-1"> {{ $row['browser'] }} </div>
				<div class="col-md-1"> {{ $row['is_mobile'] }} </div>
				<div class="col-md-2"> {{ $row['robot'] }} </div>
				<div class="col-md-2"> {{ $row['created_at'] }} </div>
				<div class="col-md-2"> {{ $row['other_details'] }} </div>
			</div>
		@endforeach
	</div>
@endsection