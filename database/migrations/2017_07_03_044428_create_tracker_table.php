<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracker', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip');
            $table->string('browser');
            $table->string('platform');
            $table->boolean('is_mobile');
            $table->string('robot');
            $table->string('user_agent');
            $table->string('customer_email')->nullable();
            $table->string('other_details')->nullable();
            $table->string('campaign_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
