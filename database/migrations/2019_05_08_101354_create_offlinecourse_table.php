<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfflinecourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('offlinecourse', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->text('short_description');
                $table->text('description');
                $table->text('outcomes');
                $table->text('section');
                $table->text('lesson');
                $table->text('requirements');
                $table->string('language');
                $table->string('amount');
                 $table->string('thumbnail')->nullable();
               $table->unsignedInteger('category_id');
               $table->unsignedInteger('instructor_id');
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
        Schema::dropIfExists('offlinecourse');
    }
}
