<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
			Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('description')->nullable();	
            $table->string('comp_gm')->nullable();	
            $table->string('compgm_email')->nullable();	
            $table->integer('location_id')->unsigned()->index();				
            $table->rememberToken();
            $table->timestamps();
			$table->softDeletes();
			
			$table->foreign('location_id')->references('id')->on('locations');				
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
