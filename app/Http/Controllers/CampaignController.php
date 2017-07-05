<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
	public function create(Request $request)
	{
		if ( 'GET' === $request->method() ) {
			return view('campaign/form');
		}

		$status =['status' => 400, 'message' => 'not able to add.'];
		$input = $request->input();

		$input_request['name'] = $input['name'];
		$input_request['code'] =  uniqid();
		
		if( Campaign::create($input_request)) 
		{
			$status = ['status' => 200, 'message' => 'added successfully.'];
		}
		return redirect('/campaign');
	}

	public function get()
	{
		$campaigns = Campaign::all();
		return view('campaign/list')->with('data', $campaigns);
	}
}