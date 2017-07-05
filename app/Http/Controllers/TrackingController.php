<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Tracker;
use App\Campaign;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class TrackingController extends Controller
{
	private $agent;
	public function __construct() {
		$this->agent = new Agent;
	}

	public function capture_event(Request $request, $campaign_code)
	{
		$campaign_details = Campaign::where('code', $campaign_code)->first();
		if ( ! empty( $campaign_details ) ) {
			$input = $request->input();
			$client_request['ip'] = $request->ip();
			$client_request['browser'] = $this->agent->browser();
			$client_request['platform'] = $this->agent->platform();
			$client_request['is_mobile'] = $this->agent->isMobile();
			$client_request['robot'] = $this->agent->robot();
			$client_request['user_agent'] = $request->header('user-agent');
			$client_request['campaign_code'] = $campaign_code;
			$client_request['customer_email'] = isset( $input['customer_email'] ) ? $input['customer_email'] : '' ;
			$client_request['other_details'] = json_encode($input);
			
			if( Tracker::create($client_request)) 
			{
				header('Content-Type: image/gif');
				die(base64_decode('R0lGODlhAQABAJAAAP8AAAAAACH5BAUQAAAALAAAAAABAAEAAAICBAEAOw=='));
			}
		}
		header('Content-Type: image/gif');
		die(base64_decode('R0lGODlhAQABAJAAAP8AAAAAACH5BAUQAAAALAAAAAABAAEAAAICBAEAOw=='));
	}

	public function event_log( $campaign_code ) {
		$log = Tracker::where('campaign_code', $campaign_code)->get();
		return view('tracking/event_log')->with('log', $log)->with('campaign_code', $campaign_code);
	}

	public function stats() {
		$grouped_logs = Tracker::groupBy('campaign_code')->select('campaign_code', \DB::raw('count(*) as total_visits, count(distinct(ip)) as unique_visits'))->get();

		return view('tracking/stats')->with('grouped_logs', $grouped_logs);
	}
}