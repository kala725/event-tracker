@extends('base')
   
@section('content')

    <div class="links">
        <a href="{{ url('/campaign/create') }}">Add New Campaign</a>
        <a href="{{ url('/campaign') }}">See all existing Campaigns</a>
        <a href="{{ url('/tracking/stats') }}">Stats</a>
        <a href="{{ url('/tracking/log/campaign_code') }}">Event log</a>
    </div>
@endsection
        
