<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
			$table->increments('id');
			$table->string('appName')->nullable();
            $table->string('leftImg')->nullable();	
            $table->string('rightImg')->nullable();	
            $table->string('prevImgL')->nullable();	
            $table->string('prevImgR')->nullable();				
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
        Schema::dropIfExists('configs');
    }
}
