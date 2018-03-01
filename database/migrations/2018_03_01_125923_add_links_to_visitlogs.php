<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLinksToVisitlogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('visitlogs', function (Blueprint $table) {
            //
		$table->integer('link_id')->unsigned()->index();		
		$table->foreign('link_id')->references('id')->on('links')->onDelete('cascade');								
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('visitlogs', function (Blueprint $table) {
            //
        });
    }
}
