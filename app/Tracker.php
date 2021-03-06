<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{

	protected $table = 'tracker';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ip','browser', 'platform', 'is_mobile', 'robot', 'customer_email', 'campaign_code', 'user_agent', 'other_details'
    ];

    public $timestamps = true;
}
