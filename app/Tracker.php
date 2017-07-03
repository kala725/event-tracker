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
        'ip', 'customer_email', 'campaign', 'user_agent'
    ];

    public $timestamps = true;
}
