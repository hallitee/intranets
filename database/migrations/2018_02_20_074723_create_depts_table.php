<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('depts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');	
            $table->string('dept_hod');	
            $table->string('depthod_email');
            $table->integer('company_id')->unsigned()->index();
            $table->rememberToken();
            $table->timestamps();
			$table->softDeletes();
			
			$table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');							
        });				
			
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('depts');
    }
}
