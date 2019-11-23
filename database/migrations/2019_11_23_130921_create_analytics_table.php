<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalyticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analytics', function (Blueprint $table) {
            $table->bigIncrements('analytics_id');
            $table->text('analytics_userid')->nullable();
            $table->text('analytics_ipaddress')->nullable();
            $table->text('analytics_location')->nullable();
            $table->text('analytics_latitude')->nullable();
            $table->text('analytics_longitude')->nullable();
            $table->bigInteger('analytics_visits')->default(0);
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

        Schema::dropIfExists('analytics');
    }
}
