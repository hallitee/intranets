<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		
			Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();		
            $table->string('password');	
            $table->integer('company_id')->unsigned()->index();				
            $table->integer('dept_id')->unsigned()->index()->nullable();				
            $table->rememberToken();
            $table->timestamps();
			$table->softDeletes();	
			
			
			$table->foreign('dept_id')->references('id')->on('depts')->onDelete('cascade');		
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
        //
    }
}
