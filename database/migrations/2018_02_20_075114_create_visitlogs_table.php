<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitlogs', function (Blueprint $table) {

            $table->increments('id');
            $table->string('user_ip');
            $table->string('dest_url');		
            $table->integer('user_id')->unsigned()->index();							
            $table->timestamps();
			$table->softDeletes();	
			
			
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');						
			});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitlogs');
    }
}
