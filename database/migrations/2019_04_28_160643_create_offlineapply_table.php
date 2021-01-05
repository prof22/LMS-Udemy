<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfflineapplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offlineapply', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_title');
            $table->string('fullname');
            $table->string('address');
            $table->string('state');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('message');
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
        Schema::dropIfExists('offlineapply');
    }
}
