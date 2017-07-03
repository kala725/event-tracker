<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Tracker;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
	public function index(Request $request, $tracking_id)
	{
		$input = $request->input();
		$client_request['ip'] = $request->ip();
		$client_request['user_agent'] = $request->header('user-agent');
		$client_request['customer_email'] = $input['customer_email'];
		$client_request['campaign'] = $input['campaign'];
		
		return Tracker::create($client_request);
	}
}