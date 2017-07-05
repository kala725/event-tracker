<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{

	protected $table = 'campaign';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'code'
    ];

    public $timestamps = true;
}
