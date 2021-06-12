<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('student_id')->unique()->nullable();
            $table->string('name');
            $table->string('session');
            $table->string('language');
            $table->string('class');
            $table->string('section');
            $table->string('gender')->default('');
            $table->string('address')->default('');
            $table->string('father');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person');
    }
}
