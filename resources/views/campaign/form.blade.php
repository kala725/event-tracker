@extends('base')
@section('content')
	<div class="row">
		<a href="{{ url('/campaign')}}"> See Existing Campaigns </a>
	    <form class="margin-top-30" method="POST" action="{{ url('/campaign/create') }}">
	    	<div class="form-group">
			    <label for="campaign-name">Campaign Name </label>
			    <input type="text" class="form-control" name="name" placeholder="Enter the Campaign Name">
			</div>
			<div class="form-group">
			    <label>Unique Campaign Tracking Code Would be generaed by the app. Please check it on the all campaign page</label>
			</div>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<button type="submit" class="btn btn-primary">Submit</button>
	    </form>
	</div>
@endsection