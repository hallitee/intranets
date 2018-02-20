<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('url')->unique();
            $table->string('descr');			
            $table->binary('img1');	
            $table->binary('img2');		
            $table->integer('group');		
            $table->integer('dept_id')->unsigned()->index()->nullable();			
            $table->timestamps();
			$table->softDeletes();	
			
			
			$table->foreign('dept_id')->references('id')->on('depts')->onDelete('cascade');		
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('links');
    }
}
